<?php

return [
    'label' => 'Zona Pengiriman',
    'label_plural' => 'Zona Pengiriman',
    'form' => [
        'unrestricted' => [
            'content' => 'Zona pengiriman ini tidak memiliki pembatasan dan akan tersedia untuk semua pelanggan saat checkout.',
        ],
        'name' => [
            'label' => 'Nama',
        ],
        'type' => [
            'label' => 'Tipe',
            'options' => [
                'unrestricted' => 'Tanpa Pembatasan',
                'countries' => 'Batasi ke Negara',
                'states' => 'Batasi ke Negara Bagian / Provinsi',
                'postcodes' => 'Batasi ke Kode Pos',
            ],
        ],
        'country' => [
            'label' => 'Negara',
        ],
        'states' => [
            'label' => 'Negara Bagian',
        ],
        'countries' => [
            'label' => 'Negara',
        ],
        'postcodes' => [
            'label' => 'Kode Pos',
            'helper' => 'Daftarkan setiap kode pos pada baris baru. Mendukung wildcard seperti NW*',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'type' => [
            'label' => 'Tipe',
            'options' => [
                'unrestricted' => 'Tanpa Pembatasan',
                'countries' => 'Batasi ke Negara',
                'states' => 'Batasi ke Negara Bagian / Provinsi',
                'postcodes' => 'Batasi ke Kode Pos',
            ],
        ],
    ],
];
