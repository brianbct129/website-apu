<?php

return [

    'label' => 'Koleksi',

    'plural_label' => 'Koleksi',

    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
    ],

    'pages' => [
        'children' => [
            'label' => 'Koleksi Sub Koleksi',
            'actions' => [
                'create_child' => [
                    'label' => 'Buat Koleksi Sub Koleksi',
                ],
            ],
            'table' => [
                'children_count' => [
                    'label' => 'Jumlah Sub Koleksi',
                ],
                'name' => [
                    'label' => 'Nama',
                ],
            ],
        ],
        'edit' => [
            'label' => 'Informasi Dasar',
        ],
        'products' => [
            'label' => 'Produk',
            'actions' => [
                'attach' => [
                    'label' => 'Lampirkan Produk',
                ],
            ],
        ],
    ],

];
