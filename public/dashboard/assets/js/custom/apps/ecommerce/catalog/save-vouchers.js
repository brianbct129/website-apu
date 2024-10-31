"use strict";

// Fungsi utama aplikasi
var KTAppEcommerceSavevouchers = (function () {
    return {
        init: function () {
            // Mendefinisikan variabel untuk elemen-elemen
            var o, a, o2, a2, hiddenUsageLimit, hiddenPrecentage, hiddenDiscountedPrice;

            // Get initial values from hidden inputs
            hiddenUsageLimit = document.querySelector("#usage_limit");
            hiddenPrecentage = document.querySelector("#precentage_amount");
            
            const initialUsageLimit = parseInt(hiddenUsageLimit.value) || 0;
            const initialPercentage = parseInt(hiddenPrecentage.value) || 0;

            // Init date range picker
            const dateRangeEl = document.querySelector("#valid_date");
            $(dateRangeEl).daterangepicker({
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

            // Input jumlah persentase
            hiddenPrecentage = document.querySelector("#precentage_amount");

            // Slider batas penggunaan
            hiddenUsageLimit = document.querySelector("#usage_limit");

            // Input harga diskon
            hiddenDiscountedPrice = document.querySelector("#discounted_price");

            // Inisialisasi slider untuk diskon persentase
            o = document.querySelector("#kt_ecommerce_add_vouchers_discount_slider");
            a = document.querySelector("#kt_ecommerce_add_vouchers_discount_label");
            noUiSlider.create(o, { 
                start: [initialPercentage], 
                connect: true, 
                range: { min: 0, max: 100 } 
            });
            o.noUiSlider.on("update", function (e, t) {
                var value = Math.round(e[t]);
                a.innerHTML = value;
                hiddenPrecentage.value = value;
            });

            // Inisialisasi slider untuk batas penggunaan
            o2 = document.querySelector("#kt_ecommerce_add_usage_limit");
            a2 = document.querySelector("#kt_ecommerce_add_usage_limit_label");
            noUiSlider.create(o2, { 
                start: [initialUsageLimit], 
                connect: true, 
                range: { min: 0, max: 100 } 
            });
            o2.noUiSlider.on("update", function (e, t) {
                var value = Math.round(e[t]);
                a2.innerHTML = value;
                hiddenUsageLimit.value = value;
            });

            // Event listener untuk tombol radio (pemilihan opsi diskon)
            (function () {
                const discountOptions = document.querySelectorAll('input[name="discount_option"]');
                const percentageSection = document.getElementById("kt_ecommerce_add_vouchers_discount_percentage");
                const fixedPriceSection = document.getElementById("kt_ecommerce_add_vouchers_discount_fixed");

                discountOptions.forEach((option) => {
                    option.addEventListener("change", (event) => {
                        switch (event.target.value) {
                            case "2": // Persentase dipilih
                                percentageSection.classList.remove("d-none");
                                fixedPriceSection.classList.add("d-none");
                                hiddenDiscountedPrice.value = "";
                                break;
                            case "3": // Harga Tetap dipilih
                                percentageSection.classList.add("d-none");
                                fixedPriceSection.classList.remove("d-none");
                                hiddenPrecentage.value = "";
                                break;
                        }
                    });
                });
            })();

            // Validasi formulir
            (function () {
                let formValidationInstance;
                const form = document.getElementById("kt_ecommerce_add_vouchers_form");
                const submitButton = document.getElementById("kt_ecommerce_add_vouchers_submit");

                // Inisialisasi validasi formulir
                formValidationInstance = FormValidation.formValidation(form, {
                    fields: {
                        vouchers_name: { 
                            validators: { 
                                notEmpty: { message: "Nama voucher diperlukan" } 
                            } 
                        },
                        valid_date: { 
                            validators: { 
                                notEmpty: { message: "Tanggal diperlukan" } 
                            } 
                        },
                        discounted_price: {
                            validators: {
                                callback: {
                                    message: "Harga diskon diperlukan ketika Harga Tetap dipilih",
                                    callback: function(input) {
                                        const selectedOption = document.querySelector('input[name="discount_option"]:checked').value;
                                        return selectedOption === "3" ? input.value !== "" : true;
                                    }
                                }
                            }
                        },
                        precentage_amount: {
                            validators: {
                                callback: {
                                    message: "Jumlah persentase diperlukan ketika Persentase dipilih",
                                    callback: function(input) {
                                        const selectedOption = document.querySelector('input[name="discount_option"]:checked').value;
                                        return selectedOption === "2" ? input.value !== "" : true;
                                    }
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

                // Event klik tombol submit
                submitButton.addEventListener("click", (e) => {
                    e.preventDefault();
                    
                    // Validasi formulir
                    formValidationInstance.validate().then(function (status) {
                        if (status === "Valid") {
                            // Tampilkan indikator loading
                            submitButton.setAttribute("data-kt-indicator", "on");
                            submitButton.disabled = true;

                            // Simulasi pengiriman formulir
                            setTimeout(function () {
                                // Hapus indikator loading
                                submitButton.removeAttribute("data-kt-indicator");

                                // Tampilkan pesan sukses
                                Swal.fire({
                                    text: "Formulir berhasil dikirim!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, mengerti!",
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
                                html: "Maaf, ada kesalahan terdeteksi...",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, mengerti!",
                                customClass: { confirmButton: "btn btn-primary" },
                            });
                        }
                    });
                });
            })();

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

            // Format fixed price input
            const fixedPriceInput = document.querySelector('#discounted_price');
            
            // Format on input
            fixedPriceInput.addEventListener('input', function(e) {
                let value = this.value;
                // Only format if there's a value
                if (value) {
                    this.value = formatRupiah(value);
                }
            });

            // Format initial value if exists
            if (fixedPriceInput.value) {
                fixedPriceInput.value = formatRupiah(fixedPriceInput.value);
            }

            // Clean up value before form submit
            const form = document.querySelector('#kt_ecommerce_add_vouchers_form');
            form.addEventListener('submit', function(e) {
                const rawValue = fixedPriceInput.value.replace(/[^\d]/g, '');
                fixedPriceInput.value = rawValue;
            });
        },
    };
})();

// Inisialisasi aplikasi ketika DOM telah dimuat
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceSavevouchers.init();
});

// Update handleSubmit function
var handleSubmit = function() {
    submitButton.addEventListener('click', function (e) {
        e.preventDefault();

        if (validator) {
            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    submitButton.setAttribute('data-kt-indicator', 'on');
                    submitButton.disabled = true;

                    // Clean up fixed price value before submit
                    const fixedPriceInput = document.querySelector('#discounted_price');
                    const rawValue = fixedPriceInput.value.replace(/[^\d]/g, '');
                    fixedPriceInput.value = rawValue;

                    // Prepare form data
                    const formData = new FormData(formEl);

                    // Submit form
                    fetch(formEl.getAttribute('action'), {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        // ... existing success handling ...
                    })
                    .catch(error => {
                        // ... existing error handling ...
                    })
                    .finally(() => {
                        // Reformat the fixed price input after submit
                        fixedPriceInput.value = formatRupiah(fixedPriceInput.value);
                    });
                }
            });
        }
    });
};
