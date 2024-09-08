<?php

return [
    'dashboard' => [
        'orders' => [
            'order_stats_overview' => [
                'stat_one' => [
                    'label' => 'Pesanan hari ini',
                    'increase' => ':percentage% peningkatan dari :count kemarin',
                    'decrease' => ':percentage% penurunan dari :count kemarin',
                    'neutral' => 'Tidak ada perubahan dibandingkan kemarin',
                ],
                'stat_two' => [
                    'label' => 'Pesanan 7 hari terakhir',
                    'increase' => ':percentage% peningkatan dari :count periode lalu',
                    'decrease' => ':percentage% penurunan dari :count periode lalu',
                    'neutral' => 'Tidak ada perubahan dibandingkan periode lalu',
                ],
                'stat_three' => [
                    'label' => 'Pesanan 30 hari terakhir',
                    'increase' => ':percentage% peningkatan dari :count periode lalu',
                    'decrease' => ':percentage% penurunan dari :count periode lalu',
                    'neutral' => 'Tidak ada perubahan dibandingkan periode lalu',
                ],
                'stat_four' => [
                    'label' => 'Penjualan hari ini',
                    'increase' => ':percentage% peningkatan dari :total kemarin',
                    'decrease' => ':percentage% penurunan dari :total kemarin',
                    'neutral' => 'Tidak ada perubahan dibandingkan kemarin',
                ],
                'stat_five' => [
                    'label' => 'Penjualan 7 hari terakhir',
                    'increase' => ':percentage% peningkatan dari :total periode lalu',
                    'decrease' => ':percentage% penurunan dari :total periode lalu',
                    'neutral' => 'Tidak ada perubahan dibandingkan periode lalu',
                ],
                'stat_six' => [
                    'label' => 'Penjualan 30 hari terakhir',
                    'increase' => ':percentage% peningkatan dari :total periode lalu',
                    'decrease' => ':percentage% penurunan dari :total periode lalu',
                    'neutral' => 'Tidak ada perubahan dibandingkan periode lalu',
                ],
            ],
            'order_totals_chart' => [
                'heading' => 'Total pesanan untuk tahun lalu',
                'series_one' => [
                    'label' => 'Periode Ini',
                ],
                'series_two' => [
                    'label' => 'Periode Sebelumnya',
                ],
                'yaxis' => [
                    'label' => 'Omzet :currency',
                ],
            ],
            'order_sales_chart' => [
                'heading' => 'Laporan Pesanan / Penjualan',
                'series_one' => [
                    'label' => 'Pesanan',
                ],
                'series_two' => [
                    'label' => 'Pendapatan',
                ],
                'yaxis' => [
                    'series_one' => [
                        'label' => '# Pesanan',
                    ],
                    'series_two' => [
                        'label' => 'Nilai Total',
                    ],
                ],
            ],
            'average_order_value' => [
                'heading' => 'Nilai Pesanan Rata-Rata',
            ],
            'new_returning_customers' => [
                'heading' => 'Pelanggan Baru vs Pelanggan Kembali',
                'series_one' => [
                    'label' => 'Pelanggan Baru',
                ],
                'series_two' => [
                    'label' => 'Pelanggan Kembali',
                ],
            ],
            'popular_products' => [
                'heading' => 'Produk Terlaris (12 bulan terakhir)',
                'description' => 'Angka-angka ini didasarkan pada jumlah kali produk muncul dalam pesanan, bukan jumlah yang dipesan.',
            ],
            'latest_orders' => [
                'heading' => 'Pesanan Terbaru',
            ],
        ],
    ],
    'customer' => [
        'stats_overview' => [
            'total_orders' => [
                'label' => 'Total pesanan',
            ],
            'avg_spend' => [
                'label' => 'Pengeluaran Rata-Rata',
            ],
            'total_spend' => [
                'label' => 'Total Pengeluaran',
            ],
        ],
    ],
    'variant_switcher' => [
        'label' => 'Ganti Varian',
        'table' => [
            'sku' => [
                'label' => 'SKU',
            ],
            'values' => [
                'label' => 'Nilai',
            ],
        ],
    ],
];
