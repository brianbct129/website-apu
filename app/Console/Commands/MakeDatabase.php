<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class MakeDatabase extends Command
{
    protected $signature = 'make:database';
    protected $description = 'Membuat database berdasarkan nama di file .env';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Mengambil nama database dari .env
        $dbName = env('DB_DATABASE');

        // Mengecek apakah nama database di .env tidak kosong
        if (!$dbName) {
            $this->error('Nama database di .env tidak ditemukan.');
            return;
        }

        // Set connection untuk menggunakan MySQL
        $connection = Config::get('database.connections.mysql');

        // Ganti database di konfigurasi koneksi dengan null
        $connection['database'] = null;

        // Set ulang konfigurasi koneksi tanpa database
        Config::set('database.connections.mysql', $connection);

        // Membuat database baru
        DB::statement("CREATE DATABASE IF NOT EXISTS {$dbName}");

        $this->info("Database '{$dbName}' berhasil dibuat.");
    }
}
