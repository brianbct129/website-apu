"use strict";

// Format Rupiah function
const formatRupiah = (angka) => {
    // Remove any existing currency symbol and dots
    let number = angka.replace(/[^\d.]/g, '');
    // Remove all dots first
    number = number.replace(/\./g, '');
    
    // Format number with dots
    let formatted = new Intl.NumberFormat('id-ID').format(number);
    
    // Add Rp prefix
    return `Rp ${formatted}`;
}

const KTAppEcommerceSaveProduct = (function () {
    const initRepeater = () => {
        $("#kt_ecommerce_add_product_options").repeater({
            initEmpty: false,
            defaultValues: { "text-input": "foo" },
            show: function () {
                $(this).slideDown();
                initProductOptions();
            },
            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            },
        });
    };

    const initProductOptions = () => {
        document.querySelectorAll('[data-kt-ecommerce-catalog-add-product="product_option"]').forEach((element) => {
            if (!$(element).hasClass("select2-hidden-accessible")) {
                $(element).select2({ minimumResultsForSearch: -1 });
            }
        });
    };

    const initPriceInput = () => {
        const priceInput = document.querySelector('input[name="price"]');
        
        // Format on input
        priceInput.addEventListener('input', function(e) {
            let value = this.value;
            // Only format if there's a value
            if (value) {
                this.value = formatRupiah(value);
            }
        });

        // Format initial value if exists
        if (priceInput.value) {
            priceInput.value = formatRupiah(priceInput.value);
        }
    };

    return {
        init: function () {
            let quillDescription, quillMetaDescription;

            ["#kt_ecommerce_add_product_description", "#kt_ecommerce_add_product_meta_description"].forEach((selector) => {
                let element = document.querySelector(selector);
                if (element) {
                    let quill = new Quill(selector, {
                        modules: { toolbar: [["bold", "italic", "underline"]] },
                        placeholder: "Type your text here...",
                        theme: "snow"
                    });
                    
                    if (selector === "#kt_ecommerce_add_product_description") {
                        quillDescription = quill;
                        quillDescription.root.innerHTML = document.getElementById('description').value;
                    } else if (selector === "#kt_ecommerce_add_product_meta_description") {
                        quillMetaDescription = quill;
                        quillMetaDescription.root.innerHTML = document.getElementById('meta_description').value;
                    }

                    quill.on('text-change', () => {
                        document.getElementById('description').value = quillDescription.root.innerHTML;
                        document.getElementById('meta_description').value = quillMetaDescription.root.innerHTML;
                    });
                }
            });

            ["#kt_ecommerce_add_product_tags"].forEach((selector) => {
                const element = document.querySelector(selector);
                if (element) {
                    new Tagify(element, {
                        dropdown: { 
                            maxItems: 20, 
                            classname: "tagify__inline__suggestions", 
                            enabled: 0, 
                            closeOnSelect: false 
                        } 
                    });
                }
            });

            initRepeater();

            new Dropzone("#kt_ecommerce_add_product_media", {
                url: "https://keenthemes.com/scripts/void.php",
                paramName: "file",
                maxFiles: 4,
                maxFilesize: 4,
                addRemoveLinks: true,
                accept: function (file, done) {
                    if (file.name == "wow.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                },
            });

            initProductOptions();

            initPriceInput();

            (() => {
                const statusElement = document.getElementById("kt_ecommerce_add_product_status");
                const statusSelect = document.getElementById("kt_ecommerce_add_product_status_select");
                const statusClasses = ["bg-success", "bg-warning", "bg-danger"];

                $(statusSelect).on("change", function (e) {
                    statusClasses.forEach(cls => statusElement.classList.remove(cls));
                    switch (e.target.value) {
                        case "published":
                            statusElement.classList.add("bg-success");
                            hideStatusDatepicker();
                            break;
                        case "scheduled":
                            statusElement.classList.add("bg-warning");
                            showStatusDatepicker();
                            break;
                        case "inactive":
                            statusElement.classList.add("bg-danger");
                            hideStatusDatepicker();
                            break;
                        case "draft":
                            statusElement.classList.add("bg-primary");
                            hideStatusDatepicker();
                            break;
                    }
                });

                const datepicker = document.getElementById("kt_ecommerce_add_product_status_datepicker");
                $("#kt_ecommerce_add_product_status_datepicker").flatpickr({ enableTime: true, dateFormat: "Y-m-d H:i" });

                const showStatusDatepicker = () => {
                    datepicker.parentNode.classList.remove("d-none");
                };

                const hideStatusDatepicker = () => {
                    datepicker.parentNode.classList.add("d-none");
                };
            })();

            (() => {
                const methodRadios = document.querySelectorAll('[name="method"][type="radio"]');
                const autoOptions = document.querySelector('[data-kt-ecommerce-catalog-add-category="auto-options"]');
                
                methodRadios.forEach((radio) => {
                    radio.addEventListener("change", (e) => {
                        if (e.target.value === "1") {
                            autoOptions.classList.remove("d-none");
                        } else {
                            autoOptions.classList.add("d-none");
                        }
                    });
                });
            })();

            (() => {
                const discountOptions = document.querySelectorAll('input[name="discount_option"]');
                const percentageDiscount = document.getElementById("kt_ecommerce_add_product_discount_percentage");
                const fixedDiscount = document.getElementById("kt_ecommerce_add_product_discount_fixed");

                discountOptions.forEach((option) => {
                    option.addEventListener("change", (e) => {
                        switch (e.target.value) {
                            case "2":
                                percentageDiscount.classList.remove("d-none");
                                fixedDiscount.classList.add("d-none");
                                break;
                            case "3":
                                percentageDiscount.classList.add("d-none");
                                fixedDiscount.classList.remove("d-none");
                                break;
                            default:
                                percentageDiscount.classList.add("d-none");
                                fixedDiscount.classList.add("d-none");
                        }
                    });
                });
            })();

            (() => {
                let validator;
                const form = document.getElementById("kt_ecommerce_add_product_form");
                const submitButton = document.getElementById("kt_ecommerce_add_product_submit");

                validator = FormValidation.formValidation(form, {
                    fields: {
                        product_name: { validators: { notEmpty: { message: "Product name is required" } } },
                        sku: { validators: { notEmpty: { message: "SKU is required" } } },
                        barcode: { validators: { notEmpty: { message: "Product barcode is required" } } },
                        shelf: { validators: { notEmpty: { message: "Shelf quantity is required" } } },
                        price: {
                            validators: {
                                notEmpty: { message: "Product price is required" },
                                callback: {
                                    message: 'Please enter a valid price',
                                    callback: function(input) {
                                        // Get raw value without currency and dots
                                        const value = input.value.replace(/[^\d]/g, '');
                                        return value.length > 0;
                                    }
                                }
                            }
                        },
                        tax: { validators: { notEmpty: { message: "Product tax class is required" } } },
                    },
                    plugins: { 
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({ 
                            rowSelector: ".fv-row, .row", 
                            eleInvalidClass: "", 
                            eleValidClass: "" 
                        })
                    },
                });

                submitButton.addEventListener("click", (e) => {
                    e.preventDefault();
                    
                    if (validator) {
                        validator.validate().then(function (status) {
                            if (status === "Valid") {
                                // Clean up price value before submit
                                const priceInput = document.querySelector('input[name="price"]');
                                const rawValue = priceInput.value.replace(/[^\d]/g, '');
                                priceInput.value = rawValue;

                                submitButton.setAttribute("data-kt-indicator", "on");
                                submitButton.disabled = true;
                    
                                setTimeout(function () {
                                    submitButton.removeAttribute("data-kt-indicator");
                                    Swal.fire({
                                        text: "Form has been successfully submitted!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: { confirmButton: "btn btn-primary" },
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            submitButton.disabled = false;
                                            window.location = form.getAttribute("data-kt-redirect");
                                        }
                                    });
                                }, 2000);
                            } else {
                                Swal.fire({
                                    html: "Sorry, there are errors detected...",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { confirmButton: "btn btn-primary" },
                                });
                            }
                        });
                    }
                });
            })();
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceSaveProduct.init();
});
