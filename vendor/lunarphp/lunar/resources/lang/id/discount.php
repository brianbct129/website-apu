<?php

return [

    'plural_label' => 'Diskon',
    'label' => 'Diskon',
    'form' => [
        'conditions' => [
            'heading' => 'Kondisi',
        ],
        'buy_x_get_y' => [
            'heading' => 'Beli X Dapat Y',
        ],
        'amount_off' => [
            'heading' => 'Potongan Jumlah',
        ],
        'name' => [
            'label' => 'Nama',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'starts_at' => [
            'label' => 'Tanggal Mulai',
        ],
        'ends_at' => [
            'label' => 'Tanggal Berakhir',
        ],
        'priority' => [
            'label' => 'Prioritas',
            'helper_text' => 'Diskon dengan prioritas lebih tinggi akan diterapkan terlebih dahulu.',
            'options' => [
                'low' => [
                    'label' => 'Rendah',
                ],
                'medium' => [
                    'label' => 'Sedang',
                ],
                'high' => [
                    'label' => 'Tinggi',
                ],
            ],
        ],
        'stop' => [
            'label' => 'Hentikan diskon lain diterapkan setelah ini',
        ],
        'coupon' => [
            'label' => 'Kupon',
            'helper_text' => 'Masukkan kupon yang diperlukan untuk menerapkan diskon, jika dibiarkan kosong, diskon akan diterapkan secara otomatis.',
        ],
        'max_uses' => [
            'label' => 'Jumlah Maksimum Penggunaan',
            'helper_text' => 'Biarkan kosong untuk penggunaan tanpa batas.',
        ],
        'max_uses_per_user' => [
            'label' => 'Jumlah Maksimum Penggunaan per Pengguna',
            'helper_text' => 'Biarkan kosong untuk penggunaan tanpa batas.',
        ],
        'minimum_cart_amount' => [
            'label' => 'Jumlah Keranjang Minimum',
        ],
        'min_qty' => [
            'label' => 'Jumlah Produk',
            'helper_text' => 'Tentukan berapa banyak produk yang memenuhi syarat diperlukan untuk menerapkan diskon.',
        ],
        'reward_qty' => [
            'label' => 'Jumlah Barang Gratis',
            'helper_text' => 'Berapa banyak dari setiap item yang didiskon.',
        ],
        'max_reward_qty' => [
            'label' => 'Jumlah Hadiah Maksimum',
            'helper_text' => 'Jumlah maksimum produk yang dapat didiskon, terlepas dari kriteria.',
        ],
        'automatic_rewards' => [
            'label' => 'Tambahkan Hadiah Secara Otomatis',
            'helper_text' => 'Aktifkan untuk menambahkan produk hadiah ketika tidak ada di keranjang.',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'status' => [
            'label' => 'Status',
            \Lunar\Models\Discount::ACTIVE => [
                'label' => 'Aktif',
            ],
            \Lunar\Models\Discount::PENDING => [
                'label' => 'Menunggu',
            ],
            \Lunar\Models\Discount::EXPIRED => [
                'label' => 'Kedaluwarsa',
            ],
            \Lunar\Models\Discount::SCHEDULED => [
                'label' => 'Jadwal',
            ],
        ],
        'type' => [
            'label' => 'Tipe',
        ],
        'starts_at' => [
            'label' => 'Tanggal Mulai',
        ],
        'ends_at' => [
            'label' => 'Tanggal Berakhir',
        ],
    ],
    'pages' => [
        'availability' => [
            'label' => 'Ketersediaan',
        ],
        'limitations' => [
            'label' => 'Pembatasan',
        ],
    ],
    'relationmanagers' => [
        'collections' => [
            'title' => 'Koleksi',
            'description' => 'Pilih koleksi mana yang harus dibatasi oleh diskon ini.',
            'actions' => [
                'attach' => [
                    'label' => 'Lampirkan Koleksi',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nama',
                ],
                'type' => [
                    'label' => 'Tipe',
                    'limitation' => [
                        'label' => 'Pembatasan',
                    ],
                    'exclusion' => [
                        'label' => 'Pengecualian',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Pembatasan',
                        ],
                        'exclusion' => [
                            'label' => 'Pengecualian',
                        ],
                    ],
                ],
            ],
        ],
        'brands' => [
            'title' => 'Merek',
            'description' => 'Pilih merek mana yang harus dibatasi oleh diskon ini.',
            'actions' => [
                'attach' => [
                    'label' => 'Lampirkan Merek',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nama',
                ],
                'type' => [
                    'label' => 'Tipe',
                    'limitation' => [
                        'label' => 'Pembatasan',
                    ],
                    'exclusion' => [
                        'label' => 'Pengecualian',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Pembatasan',
                        ],
                        'exclusion' => [
                            'label' => 'Pengecualian',
                        ],
                    ],
                ],
            ],
        ],
        'products' => [
            'title' => 'Produk',
            'description' => 'Pilih produk mana yang harus dibatasi oleh diskon ini.',
            'actions' => [
                'attach' => [
                    'label' => 'Tambahkan Produk',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nama',
                ],
                'type' => [
                    'label' => 'Tipe',
                    'limitation' => [
                        'label' => 'Pembatasan',
                    ],
                    'exclusion' => [
                        'label' => 'Pengecualian',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Pembatasan',
                        ],
                        'exclusion' => [
                            'label' => 'Pengecualian',
                        ],
                    ],
                ],
            ],
        ],
        'rewards' => [
            'title' => 'Hadiah Produk',
            'description' => 'Pilih produk mana yang akan didiskon jika ada di keranjang dan syarat di atas terpenuhi.',
            'actions' => [
                'attach' => [
                    'label' => 'Tambahkan Produk',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nama',
                ],
                'type' => [
                    'label' => 'Tipe',
                    'limitation' => [
                        'label' => 'Pembatasan',
                    ],
                    'exclusion' => [
                        'label' => 'Pengecualian',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Pembatasan',
                        ],
                        'exclusion' => [
                            'label' => 'Pengecualian',
                        ],
                    ],
                ],
            ],
        ],
        'conditions' => [
            'title' => 'Kondisi Produk',
            'description' => 'Pilih produk yang diperlukan agar diskon diterapkan.',
            'actions' => [
                'attach' => [
                    'label' => 'Tambahkan Produk',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nama',
                ],
                'type' => [
                    'label' => 'Tipe',
                    'limitation' => [
                        'label' => 'Pembatasan',
                    ],
                    'exclusion' => [
                        'label' => 'Pengecualian',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Pembatasan',
                        ],
                        'exclusion' => [
                            'label' => 'Pengecualian',
                        ],
                    ],
                ],
            ],
        ],
        'productvariants' => [
            'title' => 'Varian Produk',
            'description' => 'Pilih varian produk mana yang harus dibatasi oleh diskon ini.',
            'actions' => [
                'attach' => [
                    'label' => 'Tambahkan Varian Produk',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nama',
                ],
                'sku' => [
                    'label' => 'SKU',
                ],
                'values' => [
                    'label' => 'Opsi',
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Pembatasan',
                        ],
                        'exclusion' => [
                            'label' => 'Pengecualian',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
