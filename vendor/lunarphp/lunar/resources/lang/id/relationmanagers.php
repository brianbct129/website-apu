<?php

return [
    'customer_groups' => [
        'actions' => [
            'attach' => [
                'label' => 'Lampirkan Grup Pelanggan',
            ],
        ],
        'form' => [
            'name' => [
                'label' => 'Nama',
            ],
            'enabled' => [
                'label' => 'Diaktifkan',
            ],
            'starts_at' => [
                'label' => 'Tanggal Mulai',
            ],
            'ends_at' => [
                'label' => 'Tanggal Akhir',
            ],
            'visible' => [
                'label' => 'Tampil',
            ],
            'purchasable' => [
                'label' => 'Dapat Dibeli',
            ],
        ],
        'table' => [
            'description' => 'Hubungkan grup pelanggan ke :type ini untuk menentukan ketersediaannya.',
            'name' => [
                'label' => 'Nama',
            ],
            'enabled' => [
                'label' => 'Diaktifkan',
            ],
            'starts_at' => [
                'label' => 'Tanggal Mulai',
            ],
            'ends_at' => [
                'label' => 'Tanggal Akhir',
            ],
            'visible' => [
                'label' => 'Tampil',
            ],
            'purchasable' => [
                'label' => 'Dapat Dibeli',
            ],
        ],
    ],
    'channels' => [
        'actions' => [
            'attach' => [
                'label' => 'Jadwalkan Saluran Lain',
            ],
        ],
        'form' => [
            'enabled' => [
                'label' => 'Diaktifkan',
                'helper_text_false' => 'Saluran ini tidak akan diaktifkan meskipun ada tanggal mulai.',
            ],
            'starts_at' => [
                'label' => 'Tanggal Mulai',
                'helper_text' => 'Biarkan kosong untuk tersedia dari tanggal kapan saja.',
            ],
            'ends_at' => [
                'label' => 'Tanggal Akhir',
                'helper_text' => 'Biarkan kosong untuk tersedia tanpa batas waktu.',
            ],
        ],
        'table' => [
            'description' => 'Tentukan saluran mana yang diaktifkan dan jadwalkan ketersediaannya.',
            'name' => [
                'label' => 'Nama',
            ],
            'enabled' => [
                'label' => 'Diaktifkan',
            ],
            'starts_at' => [
                'label' => 'Tanggal Mulai',
            ],
            'ends_at' => [
                'label' => 'Tanggal Akhir',
            ],
        ],
    ],
    'medias' => [
        'title' => 'Media',
        'title_plural' => 'Media',
        'actions' => [
            'create' => [
                'label' => 'Buat Media',
            ],
            'view' => [
                'label' => 'Lihat',
            ],
        ],
        'form' => [
            'name' => [
                'label' => 'Nama',
            ],
            'media' => [
                'label' => 'Gambar',
            ],
            'primary' => [
                'label' => 'Utama',
            ],
        ],
        'table' => [
            'image' => [
                'label' => 'Gambar',
            ],
            'file' => [
                'label' => 'File',
            ],
            'name' => [
                'label' => 'Nama',
            ],
            'primary' => [
                'label' => 'Utama',
            ],
        ],
    ],
    'urls' => [
        'title' => 'URL',
        'title_plural' => 'URL',
        'actions' => [
            'create' => [
                'label' => 'Buat URL',
            ],
        ],
        'filters' => [
            'language_id' => [
                'label' => 'Bahasa',
            ],
        ],
        'form' => [
            'slug' => [
                'label' => 'Slug',
            ],
            'default' => [
                'label' => 'Default',
            ],
            'language' => [
                'label' => 'Bahasa',
            ],
        ],
        'table' => [
            'slug' => [
                'label' => 'Slug',
            ],
            'default' => [
                'label' => 'Default',
            ],
            'language' => [
                'label' => 'Bahasa',
            ],
        ],
    ],
    'customer_group_pricing' => [
        'title' => 'Penetapan Harga Grup Pelanggan',
        'title_plural' => 'Penetapan Harga Grup Pelanggan',
        'table' => [
            'heading' => 'Penetapan Harga Grup Pelanggan',
            'description' => 'Hubungkan harga ke grup pelanggan untuk menentukan harga produk.',
            'empty_state' => [
                'label' => 'Tidak ada penetapan harga grup pelanggan.',
                'description' => 'Buat harga grup pelanggan untuk memulai.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'Tambahkan Harga Grup Pelanggan',
                    'modal' => [
                        'heading' => 'Buat Harga Grup Pelanggan',
                    ],
                ],
            ],
        ],
    ],
    'pricing' => [
        'title' => 'Harga',
        'title_plural' => 'Harga',
        'tab_name' => 'Diskon Harga',
        'table' => [
            'heading' => 'Diskon Harga',
            'description' => 'Kurangi harga saat pelanggan membeli dalam jumlah besar.',
            'empty_state' => [
                'label' => 'Tidak ada diskon harga.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'Tambahkan Diskon Harga',
                ],
            ],
            'price' => [
                'label' => 'Harga',
            ],
            'customer_group' => [
                'label' => 'Grup Pelanggan',
                'placeholder' => 'Semua Grup Pelanggan',
            ],
            'min_quantity' => [
                'label' => 'Kuantitas Minimum',
            ],
            'currency' => [
                'label' => 'Mata Uang',
            ],
        ],
        'form' => [
            'price' => [
                'label' => 'Harga',
                'helper_text' => 'Harga pembelian, sebelum diskon.',
            ],
            'customer_group_id' => [
                'label' => 'Grup Pelanggan',
                'placeholder' => 'Semua Grup Pelanggan',
                'helper_text' => 'Pilih grup pelanggan yang akan diterapkan harga ini.',
            ],
            'min_quantity' => [
                'label' => 'Kuantitas Minimum',
                'helper_text' => 'Pilih kuantitas minimum harga ini akan tersedia.',
                'validation' => [
                    'unique' => 'Grup Pelanggan dan Kuantitas Minimum harus unik.',
                ],
            ],
            'currency_id' => [
                'label' => 'Mata Uang',
                'helper_text' => 'Pilih mata uang untuk harga ini.',
            ],
            'compare_price' => [
                'label' => 'Harga Perbandingan',
                'helper_text' => 'Harga asli atau RRP, untuk perbandingan dengan harga pembelian.',
            ],
            'basePrices' => [
                'title' => 'Harga',
                'form' => [
                    'price' => [
                        'label' => 'Harga',
                        'helper_text' => 'Harga pembelian, sebelum diskon.',
                    ],
                    'compare_price' => [
                        'label' => 'Harga Perbandingan',
                        'helper_text' => 'Harga asli atau RRP, untuk perbandingan dengan harga pembelian.',
                    ],
                ],
                'tooltip' => 'Dihasilkan secara otomatis berdasarkan nilai tukar mata uang.',
            ],
        ],
    ],
    'tax_rate_amounts' => [
        'table' => [
            'description' => '',
            'percentage' => [
                'label' => 'Persentase',
            ],
            'tax_class' => [
                'label' => 'Kelas Pajak',
            ],
        ],
    ],
];
