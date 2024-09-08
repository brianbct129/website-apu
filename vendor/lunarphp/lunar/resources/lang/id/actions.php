<?php

return [
    'collections' => [
        'create_root' => [
            'label' => 'Buat Koleksi Utama',
        ],
        'create_child' => [
            'label' => 'Buat Koleksi Anak',
        ],
        'move' => [
            'label' => 'Pindahkan Koleksi',
        ],
        'delete' => [
            'label' => 'Hapus',
        ],
    ],
    'orders' => [
        'update_status' => [
            'label' => 'Perbarui Status',
            'wizard' => [
                'step_one' => [
                    'label' => 'Status',
                ],
                'step_two' => [
                    'label' => 'Pengirim & Notifikasi',
                    'no_mailers' => 'Tidak ada pengirim yang tersedia untuk status ini.',
                ],
                'step_three' => [
                    'label' => 'Pratinjau & Simpan',
                    'no_mailers' => 'Tidak ada pengirim yang dipilih untuk pratinjau.',
                ],
            ],
            'notification' => [
                'label' => 'Status pesanan diperbarui',
            ],
            'billing_email' => [
                'label' => 'Email Penagihan',
            ],
            'shipping_email' => [
                'label' => 'Email Pengiriman',
            ],
        ],
    ],
];
