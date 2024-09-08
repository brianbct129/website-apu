<?php

return [

    'label' => 'Merek',

    'plural_label' => 'Merek',

    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'products_count' => [
            'label' => 'Jumlah Produk',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Merek ini tidak dapat dihapus karena ada produk yang terkait.',
            ],
        ],
    ],
    
    'pages' => [
        'products' => [
            'label' => 'Produk',
            'actions' => [
                'attach' => [
                    'label' => 'Asosiasikan produk',
                    'form' => [
                        'record_id' => [
                            'label' => 'Produk',
                        ],
                    ],
                    'notification' => [
                        'success' => 'Produk berhasil diasosiasikan dengan merek',
                    ],
                ],
                'detach' => [
                    'notification' => [
                        'success' => 'Produk berhasil dipisahkan.',
                    ],
                ],
            ],
        ],
        'collections' => [
            'label' => 'Koleksi',
            'table' => [
                'header_actions' => [
                    'attach' => [
                        'record_select' => [
                            'placeholder' => 'Pilih koleksi',
                        ],
                    ],
                ],
            ],
            'actions' => [
                'attach' => [
                    'label' => 'Asosiasikan koleksi',
                ],
            ],
        ],
    ],

];
