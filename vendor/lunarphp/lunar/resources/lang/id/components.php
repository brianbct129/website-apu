<?php

return [
    'tags' => [
        'notification' => [
            'updated' => 'Tag diperbarui',
        ],
    ],

    'activity-log' => [
        'input' => [
            'placeholder' => 'Tambahkan komentar',
        ],

        'action' => [
            'add-comment' => 'Tambahkan Komentar',
        ],

        'system' => 'Sistem',

        'partials' => [
            'orders' => [
                'order_created' => 'Pesanan Dibuat',
                'status_change' => 'Status diperbarui',
                'capture' => 'Pembayaran sebesar :amount pada kartu berakhir :last_four',
                'authorized' => 'Otorisasi sebesar :amount pada kartu berakhir :last_four',
                'refund' => 'Pengembalian sebesar :amount pada kartu berakhir :last_four',
                'address' => ':type diperbarui',
                'billingAddress' => 'Alamat Penagihan',
                'shippingAddress' => 'Alamat Pengiriman',
            ],

            'update' => [
                'updated' => ':model diperbarui',
            ],

            'create' => [
                'created' => ':model dibuat',
            ],

            'tags' => [
                'updated' => 'Tag diperbarui',
                'added' => 'Ditambahkan',
                'removed' => 'Dihapus',
            ],
        ],

        'notification' => [
            'comment_added' => 'Komentar ditambahkan',
        ],

    ],

    'forms' => [
        'youtube' => [
            'helperText' => 'Masukkan ID video YouTube. Misalnya: dQw4w9WgXcQ',
        ],
    ],

    'collection-tree-view' => [
        'actions' => [
            'move' => [
                'form' => [
                    'target_id' => [
                        'label' => 'Koleksi Induk',
                    ],
                ],
            ],
        ],
        'notifications' => [
            'collections-reordered' => [
                'success' => 'Koleksi Dipesan Ulang',
            ],
            'node-expanded' => [
                'danger' => 'Tidak dapat memuat koleksi',
            ],
            'delete' => [
                'danger' => 'Tidak dapat menghapus koleksi',
            ],
        ],
    ],

    'product-options-list' => [
        'add-option' => [
            'label' => 'Tambahkan Opsi',
        ],
        'delete-option' => [
            'label' => 'Hapus Opsi',
        ],
        'remove-shared-option' => [
            'label' => 'Hapus Opsi Bersama',
        ],
        'add-value' => [
            'label' => 'Tambahkan Nilai Lain',
        ],
        'name' => [
            'label' => 'Nama',
        ],
        'values' => [
            'label' => 'Nilai',
        ],
    ],
];
