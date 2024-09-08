<?php

return [

    'label' => 'Grup Atribut',

    'plural_label' => 'Grup Atribut',

    'table' => [
        'attributable_type' => [
            'label' => 'Tipe',
        ],
        'name' => [
            'label' => 'Nama',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'Posisi',
        ],
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'Tipe',
        ],
        'name' => [
            'label' => 'Nama',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'Posisi',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Grup atribut ini tidak dapat dihapus karena ada atribut yang terkait.',
            ],
        ],
    ],
];
