<?php

return [
    'dropdown' => [
        'label' => 'Dropdown',
        'form' => [
            'lookups' => [
                'label' => 'Pencarian',
                'key_label' => 'Label',
                'value_label' => 'Nilai',
            ],
        ],
    ],
    'listfield' => [
        'label' => 'Bidang Daftar',
    ],
    'text' => [
        'label' => 'Teks',
        'form' => [
            'richtext' => [
                'label' => 'Teks Kaya',
            ],
        ],
    ],
    'translatedtext' => [
        'label' => 'Teks Terjemahan',
        'form' => [
            'richtext' => [
                'label' => 'Teks Kaya',
            ],
            'locales' => 'Bahasa',
        ],
    ],
    'toggle' => [
        'label' => 'Toggle',
    ],
    'youtube' => [
        'label' => 'YouTube',
    ],
    'vimeo' => [
        'label' => 'Vimeo',
    ],
    'number' => [
        'label' => 'Nomor',
        'form' => [
            'min' => [
                'label' => 'Min.',
            ],
            'max' => [
                'label' => 'Max.',
            ],
        ],
    ],
    'file' => [
        'label' => 'File',
        'form' => [
            'file_types' => [
                'label' => 'Jenis File yang Diperbolehkan',
                'placeholder' => 'MIME Baru',
            ],
            'multiple' => [
                'label' => 'Izinkan Beberapa File',
            ],
            'min_files' => [
                'label' => 'File Min.',
            ],
            'max_files' => [
                'label' => 'File Max.',
            ],
        ],
    ],
];
