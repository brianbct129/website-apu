<?php

return [

    'label' => 'Grup Koleksi',

    'plural_label' => 'Grup Koleksi',

    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'collections_count' => [
            'label' => 'Jumlah Koleksi',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Grup koleksi ini tidak dapat dihapus karena ada koleksi yang terkait.',
            ],
        ],
    ],
];
