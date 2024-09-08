<?php

return [

    'label' => 'Grup Pelanggan',

    'plural_label' => 'Grup Pelanggan',

    'table' => [
        'name' => [
            'label' => 'Nama',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'default' => [
            'label' => 'Default',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nama',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'default' => [
            'label' => 'Default',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Grup pelanggan ini tidak dapat dihapus karena ada pelanggan yang terkait.',
            ],
        ],
    ],
];
