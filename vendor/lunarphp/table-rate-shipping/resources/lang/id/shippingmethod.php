<?php

return [
    'label_plural' => 'Metode Pengiriman',
    'label' => 'Metode Pengiriman',
    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
        'description' => [
            'label' => 'Deskripsi',
        ],
        'code' => [
            'label' => 'Kode',
        ],
        'cutoff' => [
            'label' => 'Batas Waktu',
        ],
        'charge_by' => [
            'label' => 'Biaya Berdasarkan',
            'options' => [
                'cart_total' => 'Total Keranjang',
                'weight' => 'Berat',
            ],
        ],
        'driver' => [
            'label' => 'Tipe',
            'options' => [
                'ship-by' => 'Standar',
                'collection' => 'Pengambilan',
            ],
        ],
        'stock_available' => [
            'label' => 'Stok dari semua barang keranjang harus tersedia',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'code' => [
            'label' => 'Kode',
        ],
        'driver' => [
            'label' => 'Tipe',
            'options' => [
                'ship-by' => 'Standar',
                'collection' => 'Pengambilan',
            ],
        ],
    ],
    'pages' => [
        'availability' => [
            'label' => 'Ketersediaan',
            'customer_groups' => 'Metode pengiriman ini saat ini tidak tersedia untuk semua kelompok pelanggan.',
        ],
    ],
];
