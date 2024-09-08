<?php

return [

    'label' => 'Pesanan',

    'plural_label' => 'Pesanan',

    'breadcrumb' => [
        'manage' => 'Kelola',
    ],

    'transactions' => [
        'capture' => 'Tertangkap',
        'intent' => 'Niat',
        'refund' => 'Dikembalikan',
        'failed' => 'Gagal',
    ],

    'table' => [
        'status' => [
            'label' => 'Status',
        ],
        'reference' => [
            'label' => 'Referensi',
        ],
        'customer_reference' => [
            'label' => 'Referensi Pelanggan',
        ],
        'customer' => [
            'label' => 'Pelanggan',
        ],
        'tags' => [
            'label' => 'Tag',
        ],
        'postcode' => [
            'label' => 'Kode Pos',
        ],
        'email' => [
            'label' => 'Email',
            'copy_message' => 'Alamat email disalin',
        ],
        'phone' => [
            'label' => 'Telepon',
        ],
        'total' => [
            'label' => 'Total',
        ],
        'date' => [
            'label' => 'Tanggal',
        ],
        'new_customer' => [
            'label' => 'Jenis Pelanggan',
        ],
        'placed_after' => [
            'label' => 'Ditempatkan setelah',
        ],
        'placed_before' => [
            'label' => 'Ditempatkan sebelum',
        ],
    ],

    'form' => [
        'address' => [
            'first_name' => [
                'label' => 'Nama Depan',
            ],
            'last_name' => [
                'label' => 'Nama Belakang',
            ],
            'line_one' => [
                'label' => 'Alamat Baris 1',
            ],
            'line_two' => [
                'label' => 'Alamat Baris 2',
            ],
            'line_three' => [
                'label' => 'Alamat Baris 3',
            ],
            'company_name' => [
                'label' => 'Nama Perusahaan',
            ],
            'contact_phone' => [
                'label' => 'Telepon',
            ],
            'contact_email' => [
                'label' => 'Alamat Email',
            ],
            'city' => [
                'label' => 'Kota',
            ],
            'state' => [
                'label' => 'Provinsi / Negara Bagian',
            ],
            'postcode' => [
                'label' => 'Kode Pos',
            ],
            'country_id' => [
                'label' => 'Negara',
            ],
        ],

        'reference' => [
            'label' => 'Referensi',
        ],
        'status' => [
            'label' => 'Status',
        ],
        'transaction' => [
            'label' => 'Transaksi',
        ],
        'amount' => [
            'label' => 'Jumlah',

            'hint' => [
                'less_than_total' => "Anda akan menangkap jumlah yang kurang dari nilai transaksi total",
            ],
        ],

        'notes' => [
            'label' => 'Catatan',
        ],
        'confirm' => [
            'label' => 'Konfirmasi',

            'alert' => 'Konfirmasi diperlukan',

            'hint' => [
                'capture' => 'Silakan konfirmasi jika Anda ingin menangkap pembayaran ini',
                'refund' => 'Silakan konfirmasi jika Anda ingin mengembalikan jumlah ini.',
            ],
        ],
    ],

    'infolist' => [
        'notes' => [
            'label' => 'Catatan',
            'placeholder' => 'Tidak ada catatan pada pesanan ini',
        ],
        'delivery_instructions' => [
            'label' => 'Instruksi Pengiriman',
        ],
        'shipping_total' => [
            'label' => 'Total Pengiriman',
        ],
        'paid' => [
            'label' => 'Dibayar',
        ],
        'refund' => [
            'label' => 'Pengembalian',
        ],
        'unit_price' => [
            'label' => 'Harga Satuan',
        ],
        'quantity' => [
            'label' => 'Kuantitas',
        ],
        'sub_total' => [
            'label' => 'Sub Total',
        ],
        'discount_total' => [
            'label' => 'Total Diskon',
        ],
        'total' => [
            'label' => 'Total',
        ],
        'current_stock_level' => [
            'message' => 'Tingkat Stok Saat Ini: :count',
        ],
        'purchase_stock_level' => [
            'message' => 'pada saat pemesanan: :count',
        ],
        'status' => [
            'label' => 'Status',
        ],
        'reference' => [
            'label' => 'Referensi',
        ],
        'customer_reference' => [
            'label' => 'Referensi Pelanggan',
        ],
        'channel' => [
            'label' => 'Saluran',
        ],
        'date_created' => [
            'label' => 'Tanggal Dibuat',
        ],
        'date_placed' => [
            'label' => 'Tanggal Ditempatkan',
        ],
        'new_returning' => [
            'label' => 'Baru / Kembali',
        ],
        'new_customer' => [
            'label' => 'Pelanggan Baru',
        ],
        'returning_customer' => [
            'label' => 'Pelanggan Kembali',
        ],
        'shipping_address' => [
            'label' => 'Alamat Pengiriman',
        ],
        'billing_address' => [
            'label' => 'Alamat Penagihan',
        ],
        'address_not_set' => [
            'label' => 'Alamat belum diatur',
        ],
        'billing_matches_shipping' => [
            'label' => 'Sama dengan alamat pengiriman',
        ],
        'additional_info' => [
            'label' => 'Informasi Tambahan',
        ],
        'no_additional_info' => [
            'label' => 'Tidak Ada Informasi Tambahan',
        ],
        'tags' => [
            'label' => 'Tag',
        ],
        'timeline' => [
            'label' => 'Garis Waktu',
        ],
        'transactions' => [
            'label' => 'Transaksi',
            'placeholder' => 'Tidak ada transaksi',
        ],
        'alert' => [
            'requires_capture' => 'Pesanan ini masih memerlukan pembayaran untuk ditangkap.',
            'partially_refunded' => 'Pesanan ini telah dikembalikan sebagian.',
            'refunded' => 'Pesanan ini telah dikembalikan.',
        ],
    ],

    'action' => [
        'bulk_update_status' => [
            'label' => 'Perbarui Status',
            'notification' => 'Status pesanan diperbarui',
        ],
        'update_status' => [
            'new_status' => [
                'label' => 'Status Baru',
            ],
            'additional_content' => [
                'label' => 'Konten Tambahan',
            ],
            'additional_email_recipient' => [
                'label' => 'Penerima Email Tambahan',
                'placeholder' => 'opsional',
            ],
        ],
        'download_order_pdf' => [
            'label' => 'Unduh PDF',
            'notification' => 'PDF pesanan diunduh',
        ],
        'edit_address' => [
            'label' => 'Edit',

            'notification' => [
                'error' => 'Kesalahan',

                'billing_address' => [
                    'saved' => 'Alamat penagihan disimpan',
                ],

                'shipping_address' => [
                    'saved' => 'Alamat pengiriman disimpan',
                ],
            ],
        ],
        'edit_tags' => [
            'label' => 'Edit',
        ],
        'capture_payment' => [
            'label' => 'Tangkap Pembayaran',

            'notification' => [
                'error' => 'Terjadi masalah dengan penangkapan',
                'success' => 'Penangkapan berhasil',
            ],
        ],
        'refund_payment' => [
            'label' => 'Kembalikan',

            'notification' => [
                'error' => 'Terjadi masalah dengan pengembalian',
                'success' => 'Pengembalian berhasil',
            ],
        ],
    ],

];
