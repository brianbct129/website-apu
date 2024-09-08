<?php

return [

    'label' => 'Opsi Produk',

    'plural_label' => 'Opsi Produk',

    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'label' => [
            'label' => 'Label',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'shared' => [
            'label' => 'Berbagi',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
        'label' => [
            'label' => 'Label',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
    ],

    'widgets' => [
        'product-options' => [
            'notifications' => [
                'save-variants' => [
                    'success' => [
                        'title' => 'Varian Produk Disimpan',
                    ],
                ],
            ],
            'actions' => [
                'cancel' => [
                    'label' => 'Batal',
                ],
                'save-options' => [
                    'label' => 'Simpan Opsi',
                ],
                'add-shared-option' => [
                    'label' => 'Tambahkan Opsi Berbagi',
                    'form' => [
                        'product_option' => [
                            'label' => 'Opsi Produk',
                        ],
                        'no_shared_components' => [
                            'label' => 'Tidak ada opsi berbagi yang tersedia.',
                        ],
                    ],
                ],
                'add-restricted-option' => [
                    'label' => 'Tambahkan Opsi',
                ],
            ],
            'options-list' => [
                'empty' => [
                    'heading' => 'Tidak ada opsi produk yang dikonfigurasi',
                    'description' => 'Tambahkan opsi berbagi atau opsi terbatas untuk mulai menghasilkan beberapa varian.',
                ],
            ],
            'options-table' => [
                'title' => 'Opsi Produk',
                'configure-options' => [
                    'label' => 'Konfigurasi Opsi',
                ],
                'table' => [
                    'option' => [
                        'label' => 'Opsi',
                    ],
                    'values' => [
                        'label' => 'Nilai',
                    ],
                ],
            ],
            'variants-table' => [
                'title' => 'Varian Produk',
                'actions' => [
                    'create' => [
                        'label' => 'Buat Varian',
                    ],
                    'edit' => [
                        'label' => 'Edit',
                    ],
                    'delete' => [
                        'label' => 'Hapus',
                    ],
                ],
                'empty' => [
                    'heading' => 'Tidak Ada Varian yang Dik configure',
                ],
                'table' => [
                    'new' => [
                        'label' => 'BARU',
                    ],
                    'option' => [
                        'label' => 'Opsi',
                    ],
                    'sku' => [
                        'label' => 'SKU',
                    ],
                    'price' => [
                        'label' => 'Harga',
                    ],
                    'stock' => [
                        'label' => 'Stok',
                    ],
                ],
            ],
        ],
    ],

];
