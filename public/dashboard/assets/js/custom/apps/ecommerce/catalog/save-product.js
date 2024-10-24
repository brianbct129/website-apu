"use strict";
var KTAppEcommerceSaveProduct = (function () {
    const e = () => {
            $("#kt_ecommerce_add_product_options").repeater({
                initEmpty: !1,
                defaultValues: { "text-input": "foo" },
                show: function () {
                    $(this).slideDown(), t();
                },
                hide: function (e) {
                    $(this).slideUp(e);
                },
            });
        },
        t = () => {
            document.querySelectorAll('[data-kt-ecommerce-catalog-add-product="product_option"]').forEach((e) => {
                $(e).hasClass("select2-hidden-accessible") || $(e).select2({ minimumResultsForSearch: -1 });
            });
        };
    return {
        init: function () {
            var o, a;
            let quillDescription, quillMetaDescription;
            ["#kt_ecommerce_add_product_description", "#kt_ecommerce_add_product_meta_description"].forEach((e) => {
                let t = document.querySelector(e);
            if (t) {
                let quill = new Quill(e, {
                    modules: { toolbar: [["bold", "italic", "underline"]] },
                    placeholder: "Type your text here...",
                    theme: "snow"
                });
                
                // Simpan referensi Quill editor
                if (e === "#kt_ecommerce_add_product_description") {
                    quillDescription = quill;
                    quillDescription.root.innerHTML = document.getElementById('description').value;
                } else if (e === "#kt_ecommerce_add_product_meta_description") {
                    quillMetaDescription = quill;
                    quillMetaDescription.root.innerHTML = document.getElementById('meta_description').value;
                }

                quill.on('text-change', () => {
                    document.getElementById('description').value = quillDescription.root.innerHTML;
                    document.getElementById('meta_description').value = quillMetaDescription.root.innerHTML;
                });
            }
            }),
                ["#kt_ecommerce_add_product_tags"].forEach((e) => {
                    const t = document.querySelector(e);
                    t && new Tagify(t, {dropdown: { maxItems: 20, classname: "tagify__inline__suggestions", enabled: 0, closeOnSelect: !1 } });
                }),
                e(),
                new Dropzone("#kt_ecommerce_add_product_media", {
                    url: "https://keenthemes.com/scripts/void.php",
                    paramName: "file",
                    maxFiles: 4,
                    maxFilesize: 4,
                    addRemoveLinks: !0,
                    accept: function (e, t) {
                        "wow.jpg" == e.name ? t("Naha, you don't.") : t();
                    },
                }),
                t(),
                (() => {
                    const e = document.getElementById("kt_ecommerce_add_product_status"),
                        t = document.getElementById("kt_ecommerce_add_product_status_select"),
                        o = ["bg-success", "bg-warning", "bg-danger"];
                    $(t).on("change", function (t) {
                        switch (t.target.value) {
                            case "published":
                                e.classList.remove(...o), e.classList.add("bg-success"), c();
                                break;
                            case "scheduled":
                                e.classList.remove(...o), e.classList.add("bg-warning"), d();
                                break;
                            case "inactive":
                                e.classList.remove(...o), e.classList.add("bg-danger"), c();
                                break;
                            case "draft":
                                e.classList.remove(...o), e.classList.add("bg-primary"), c();
                        }
                    });
                    const a = document.getElementById("kt_ecommerce_add_product_status_datepicker");
                    $("#kt_ecommerce_add_product_status_datepicker").flatpickr({ enableTime: !0, dateFormat: "Y-m-d H:i" });
                    const d = () => {
                            a.parentNode.classList.remove("d-none");
                        },
                        c = () => {
                            a.parentNode.classList.add("d-none");
                        };
                })(),
                (() => {
                    const e = document.querySelectorAll('[name="method"][type="radio"]'),
                        t = document.querySelector('[data-kt-ecommerce-catalog-add-category="auto-options"]');
                    e.forEach((e) => {
                        e.addEventListener("change", (e) => {
                            "1" === e.target.value ? t.classList.remove("d-none") : t.classList.add("d-none");
                        });
                    });
                })(),
                (() => {
                    const e = document.querySelectorAll('input[name="discount_option"]'),
                        t = document.getElementById("kt_ecommerce_add_product_discount_percentage"),
                        o = document.getElementById("kt_ecommerce_add_product_discount_fixed");
                    e.forEach((e) => {
                        e.addEventListener("change", (e) => {
                            switch (e.target.value) {
                                case "2":
                                    t.classList.remove("d-none"), o.classList.add("d-none");
                                    break;
                                case "3":
                                    t.classList.add("d-none"), o.classList.remove("d-none");
                                    break;
                                default:
                                    t.classList.add("d-none"), o.classList.add("d-none");
                            }
                        });
                    });
                })(),
                (() => {
                    let e;
                    const t = document.getElementById("kt_ecommerce_add_product_form"),
                        o = document.getElementById("kt_ecommerce_add_product_submit");
                    (e = FormValidation.formValidation(t, {
                        fields: {
                            product_name: { validators: { notEmpty: { message: "Product name is required" } } },
                            sku: { validators: { notEmpty: { message: "SKU is required" } } },
                            sku: { validators: { notEmpty: { message: "Product barcode is required" } } },
                            shelf: { validators: { notEmpty: { message: "Shelf quantity is required" } } },
                            price: { validators: { notEmpty: { message: "Product base price is required" } } },
                            tax: { validators: { notEmpty: { message: "Product tax class is required" } } },
                        },
                        plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row, .row", eleInvalidClass: "", eleValidClass: "" }) },
                    })),
                    o.addEventListener("click", (a) => {
                        a.preventDefault(), // Mencegah submit default
                        
                        e && e.validate().then(function (e) {
                            if ("Valid" == e) {
                                // Aktifkan indikator submit
                                o.setAttribute("data-kt-indicator", "on");
                                o.disabled = true;
                    
                                // Lanjutkan proses submit atau lainnya setelah menyimpan nilai Quill ke input hidden
                                setTimeout(function () {
                                    o.removeAttribute("data-kt-indicator"),
                                    Swal.fire({
                                        text: "Form has been successfully submitted!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: { confirmButton: "btn btn-primary" },
                                    }).then(function (e) {
                                        if (e.isConfirmed) {
                                            o.disabled = false;
                                            window.location = t.getAttribute("data-kt-redirect");
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
                    });
                    
                })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceSaveProduct.init();
});
