"use strict";
$("#valid_date").daterangepicker({
    timePicker: true,
    startDate: moment().startOf("hour"),
    endDate: moment().startOf("hour").add(32, "hour"),
    minDate: moment(),
    inline: true,
    sideBySide: true,
    locale: {
        format: "M/DD hh:mm A"
    }
});

var KTAppEcommerceSavevouchers = (function () {
    return {
        init: function () {
            // Define variables for elements
            var o, a, o2, a2, hiddenUsageLimit, hiddenPrecentage, hiddenDiscountedPrice;

            // Precentage amount input
            hiddenPrecentage = document.querySelector("#precentage_amount");

            // Usage limit slider
            hiddenUsageLimit = document.querySelector("#usage_limit");

            // Discounted price input
            hiddenDiscountedPrice = document.querySelector("#discounted_price");

            // Slider initialization for percentage discount
            (o = document.querySelector("#kt_ecommerce_add_vouchers_discount_slider")),
            (a = document.querySelector("#kt_ecommerce_add_vouchers_discount_label")),
            noUiSlider.create(o, { start: [0], connect: !0, range: { min: 0, max: 100 } }),
            o.noUiSlider.on("update", function (e, t) {
                var value = Math.round(e[t]);
                a.innerHTML = value;
                hiddenPrecentage.value = value + "%"; // Add % sign to the hidden input value
            });

            // Slider initialization for usage limit
            (o2 = document.querySelector("#kt_ecommerce_add_usage_limit")),
            (a2 = document.querySelector("#kt_ecommerce_add_usage_limit_label")),
            noUiSlider.create(o2, { start: [0], connect: !0, range: { min: 0, max: 100 } }),
            o2.noUiSlider.on("update", function (e, t) {
                var value = Math.round(e[t]);
                a2.innerHTML = value;
                hiddenUsageLimit.value = value;
            });

            // Event listener for radio buttons (discount option selection)
            (() => {
                const discountOptions = document.querySelectorAll('input[name="discount_option"]'),
                      percentageSection = document.getElementById("kt_ecommerce_add_vouchers_discount_percentage"),
                      fixedPriceSection = document.getElementById("kt_ecommerce_add_vouchers_discount_fixed");

                discountOptions.forEach((option) => {
                    option.addEventListener("change", (event) => {
                        switch (event.target.value) {
                            case "2": // Percentage selected
                                percentageSection.classList.remove("d-none");
                                fixedPriceSection.classList.add("d-none");
                                hiddenDiscountedPrice.value = ""; // Clear discounted price when percentage is selected
                                break;
                            case "3": // Fixed Price selected
                                percentageSection.classList.add("d-none");
                                fixedPriceSection.classList.remove("d-none");
                                hiddenPrecentage.value = ""; // Clear percentage amount when fixed price is selected
                                break;
                        }
                    });
                });
            })();

            // Form validation
            (() => {
                let formValidationInstance;
                const form = document.getElementById("kt_ecommerce_add_vouchers_form"),
                      submitButton = document.getElementById("kt_ecommerce_add_vouchers_submit");

                // Initialize form validation
                formValidationInstance = FormValidation.formValidation(form, {
                    fields: {
                        vouchers_name: { 
                            validators: { 
                                notEmpty: { message: "Vouchers name is required" } 
                            } 
                        },
                        valid_date: { 
                            validators: { 
                                notEmpty: { message: "Date is required" } 
                            } 
                        },
                        discounted_price: {
                            validators: {
                                callback: {
                                    message: "Discounted price is required when Fixed Price is selected",
                                    callback: function(input) {
                                        const selectedOption = document.querySelector('input[name="discount_option"]:checked').value;
                                        // Return true if Fixed Price is selected and discounted_price is filled
                                        return selectedOption === "3" ? input.value !== "" : true;
                                    }
                                }
                            }
                        },
                        precentage_amount: {
                            validators: {
                                callback: {
                                    message: "Percentage amount is required when Percentage is selected",
                                    callback: function(input) {
                                        const selectedOption = document.querySelector('input[name="discount_option"]:checked').value;
                                        return selectedOption === "2" ? input.value !== "" : true;
                                    }
                                },
                                between: {
                                    min: 1,
                                    max: 100,
                                    message: "Percentage must be between 1% and 100%"
                                }
                            }
                        },                        
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".row, .fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    },
                });

                // Submit button click event
                submitButton.addEventListener("click", (e) => {
                    e.preventDefault(); // Prevent default form submission
                    
                    // Validate form
                    formValidationInstance.validate().then(function (status) {
                        if (status === "Valid") {
                            // Show loading indicator
                            submitButton.setAttribute("data-kt-indicator", "on");
                            submitButton.disabled = true;

                            // Simulate form submission
                            setTimeout(function () {
                                // Remove loading indicator
                                submitButton.removeAttribute("data-kt-indicator");

                                // Show success message
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
                });
            })();
        },
    };
})();

// Initialize the app when DOM is loaded
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceSavevouchers.init();
});
