<?php

return [
    'label' => 'Varian Produk',
    'plural_label' => 'Varian Produk',
    'pages' => [
        'edit' => [
            'title' => 'Informasi Dasar',
        ],
        'media' => [
            'title' => 'Media',
            'form' => [
                'no_selection' => [
                    'label' => 'Saat ini tidak ada gambar yang dipilih untuk varian ini.',
                ],
                'no_media_available' => [
                    'label' => 'Saat ini tidak ada media yang tersedia pada produk ini.',
                ],
                'images' => [
                    'label' => 'Gambar Utama',
                    'helper_text' => 'Pilih gambar produk yang mewakili varian ini.',
                ],
            ],
        ],
        'identifiers' => [
            'title' => 'Pengidentifikasi',
        ],
        'inventory' => [
            'title' => 'Persediaan',
        ],
        'shipping' => [
            'title' => 'Pengiriman',
        ],
    ],
    'form' => [
        'sku' => [
            'label' => 'SKU',
        ],
        'gtin' => [
            'label' => 'Nomor Item Perdagangan Global (GTIN)',
        ],
        'mpn' => [
            'label' => 'Nomor Bagian Pabrikan (MPN)',
        ],
        'ean' => [
            'label' => 'UPC/EAN',
        ],
        'stock' => [
            'label' => 'Tersedia',
        ],
        'backorder' => [
            'label' => 'Dalam Pemesanan Kembali',
        ],
        'purchasable' => [
            'label' => 'Dapat Dibeli',
            'options' => [
                'always' => 'Selalu',
                'in_stock' => 'Tersedia',
                'in_stock_or_on_backorder' => 'Tersedia atau Dalam Pemesanan Kembali',
            ],
        ],
        'unit_quantity' => [
            'label' => 'Jumlah Per Unit',
            'helper_text' => 'Berapa banyak item individu yang membentuk 1 unit.',
        ],
        'min_quantity' => [
            'label' => 'Kuantitas Minimum',
            'helper_text' => 'Kuantitas minimum dari varian produk yang dapat dibeli dalam satu pembelian.',
        ],
        'quantity_increment' => [
            'label' => 'Peningkatan Kuantitas',
            'helper_text' => 'Varian produk harus dibeli dalam kelipatan kuantitas ini.',
        ],
        'tax_class_id' => [
            'label' => 'Kelas Pajak',
        ],
        'shippable' => [
            'label' => 'Dapat Dikirim',
        ],
        'length_value' => [
            'label' => 'Panjang',
        ],
        'length_unit' => [
            'label' => 'Satuan Panjang',
        ],
        'width_value' => [
            'label' => 'Lebar',
        ],
        'width_unit' => [
            'label' => 'Satuan Lebar',
        ],
        'height_value' => [
            'label' => 'Tinggi',
        ],
        'height_unit' => [
            'label' => 'Satuan Tinggi',
        ],
        'weight_value' => [
            'label' => 'Berat',
        ],
        'weight_unit' => [
            'label' => 'Satuan Berat',
        ],
    ],
];
