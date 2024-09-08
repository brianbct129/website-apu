<?php

return [

    'label' => 'Jenis Produk',

    'plural_label' => 'Jenis Produk',

    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'products_count' => [
            'label' => 'Jumlah Produk',
        ],
        'product_attributes_count' => [
            'label' => 'Atribut Produk',
        ],
        'variant_attributes_count' => [
            'label' => 'Atribut Varian',
        ],
    ],

    'tabs' => [
        'product_attributes' => [
            'label' => 'Atribut Produk',
        ],
        'variant_attributes' => [
            'label' => 'Atribut Varian',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
    ],

    'attributes' => [
        'no_groups' => 'Tidak ada kelompok atribut yang tersedia.',
        'no_attributes' => 'Tidak ada atribut yang tersedia.',
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Jenis produk ini tidak dapat dihapus karena ada produk yang terkait.',
            ],
        ],
    ],

];
