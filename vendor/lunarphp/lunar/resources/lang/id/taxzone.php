<?php

return [

    'label' => 'Zona Pajak',

    'plural_label' => 'Zona Pajak',

    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'zone_type' => [
            'label' => 'Tipe Zona',
        ],
        'active' => [
            'label' => 'Aktif',
        ],
        'default' => [
            'label' => 'Default',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
        'zone_type' => [
            'label' => 'Tipe Zona',
            'options' => [
                'country' => 'Batasi ke Negara',
                'states' => 'Batasi ke Negara Bagian',
                'postcodes' => 'Batasi ke Kode Pos',
            ],
        ],
        'price_display' => [
            'label' => 'Tampilan Harga',
            'options' => [
                'include_tax' => 'Sertakan Pajak',
                'exclude_tax' => 'Kecualikan Pajak',
            ],
        ],
        'active' => [
            'label' => 'Aktif',
        ],
        'default' => [
            'label' => 'Default',
        ],

        'zone_countries' => [
            'label' => 'Negara',
        ],

        'zone_country' => [
            'label' => 'Negara',
        ],

        'zone_states' => [
            'label' => 'Negara Bagian',
        ],

        'zone_postcodes' => [
            'label' => 'Kode Pos',
            'helper' => 'Daftar setiap kode pos pada baris baru. Mendukung wildcard seperti NW*',
        ],

    ],

];
