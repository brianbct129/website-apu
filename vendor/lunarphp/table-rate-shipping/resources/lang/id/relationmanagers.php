<?php

return [
    'shipping_methods' => [
        'customer_groups' => [
            'description' => "Hubungkan kelompok pelanggan dengan metode pengiriman ini untuk menentukan ketersediaannya.",
        ],
    ],
    'shipping_rates' => [
        'title_plural' => 'Tarif Pengiriman',
        'actions' => [
            'create' => [
                'label' => 'Buat Tarif Pengiriman',
            ],
        ],
        'notices' => [
            'prices_incl_tax' => 'Semua harga termasuk pajak, yang akan dipertimbangkan saat menghitung pengeluaran minimum.',
            'prices_excl_tax' => 'Semua harga tidak termasuk pajak, pengeluaran minimum akan didasarkan pada subtotal keranjang.',
        ],
        'form' => [
            'shipping_method_id' => [
                'label' => 'Metode Pengiriman',
            ],
            'price' => [
                'label' => 'Harga',
            ],
            'prices' => [
                'label' => 'Diskon Harga',
                'repeater' => [
                    'customer_group_id' => [
                        'label' => 'Kelompok Pelanggan',
                        'placeholder' => 'Semua',
                    ],
                    'currency_id' => [
                        'label' => 'Mata Uang',
                    ],
                    'min_quantity' => [
                        'label' => 'Pengeluaran Min.',
                    ],
                    'price' => [
                        'label' => 'Harga',
                    ],
                ],
            ],
        ],
        'table' => [
            'shipping_method' => [
                'label' => 'Metode Pengiriman',
            ],
            'price' => [
                'label' => 'Harga',
            ],
            'price_breaks_count' => [
                'label' => 'Diskon Harga',
            ],
        ],
    ],
    'exclusions' => [
        'title_plural' => 'Pengecualian Pengiriman',
        'form' => [
            'purchasable' => [
                'label' => 'Produk',
            ],
        ],
        'actions' => [
            'create' => [
                'label' => 'Tambahkan Pengecualian Pengiriman',
            ],
            'attach' => [
                'label' => 'Tambahkan daftar pengecualian',
            ],
            'detach' => [
                'label' => 'Hapus',
            ],
        ],
    ],
];
