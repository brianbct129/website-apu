<?php

return [

    'label' => 'Produk',

    'plural_label' => 'Produk',

    'status' => [
        'unpublished' => [
            'content' => 'Saat ini dalam status draf, produk ini tersembunyi di semua saluran dan grup pelanggan.',
        ],
        'availability' => [
            'customer_groups' => 'Produk ini saat ini tidak tersedia untuk semua grup pelanggan.',
            'channels' => 'Produk ini saat ini tidak tersedia untuk semua saluran.',
        ],
    ],

    'table' => [
        'status' => [
            'label' => 'Status',
            'states' => [
                'deleted' => 'Dihapus',
                'draft' => 'Draf',
                'published' => 'Diterbitkan',
            ],
        ],
        'name' => [
            'label' => 'Nama',
        ],
        'brand' => [
            'label' => 'Merek',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'stock' => [
            'label' => 'Stok',
        ],
        'producttype' => [
            'label' => 'Tipe Produk',
        ],
    ],

    'actions' => [
        'edit_status' => [
            'label' => 'Perbarui Status',
            'heading' => 'Perbarui Status',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
        'brand' => [
            'label' => 'Merek',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'producttype' => [
            'label' => 'Tipe Produk',
        ],
        'status' => [
            'label' => 'Status',
            'options' => [
                'published' => [
                    'label' => 'Diterbitkan',
                    'description' => 'Produk ini akan tersedia di semua grup pelanggan dan saluran yang diaktifkan',
                ],
                'draft' => [
                    'label' => 'Draf',
                    'description' => 'Produk ini akan tersembunyi di semua saluran dan grup pelanggan',
                ],
            ],
        ],
        'tags' => [
            'label' => 'Tag',
        ],
        'collections' => [
            'label' => 'Koleksi',
        ],
    ],

    'pages' => [
        'availability' => [
            'label' => 'Ketersediaan',
        ],
        'identifiers' => [
            'label' => 'Identifikasi Produk',
        ],
        'inventory' => [
            'label' => 'Inventaris',
        ],
        'pricing' => [
            'form' => [
                'tax_class_id' => [
                    'label' => 'Kelas Pajak',
                ],
                'tax_ref' => [
                    'label' => 'Referensi Pajak',
                    'helper_text' => 'Opsional, untuk integrasi dengan sistem pihak ketiga.',
                ],
            ],
        ],
        'shipping' => [
            'label' => 'Pengiriman',
        ],
        'variants' => [
            'label' => 'Varian',
        ],
        'collections' => [
            'label' => 'Koleksi',
        ],
        'associations' => [
            'label' => 'Asosiasi Produk',
        ],
    ],

];
