<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:database {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new database based on .env file or provided name';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Ambil nama database dari argumen atau dari file .env
        $dbName = $this->argument('name') ?: env('DB_DATABASE');

        if (!$dbName) {
            $this->error('Database name not provided and no default found in .env.');
            return 1;
        }

        // Ambil konfigurasi koneksi database
        $connection = Config::get('database.default');
        $charset = Config::get('database.connections.' . $connection . '.charset', 'utf8mb4');
        $collation = Config::get('database.connections.' . $connection . '.collation', 'utf8mb4_unicode_ci');
        
        // Ubah koneksi ke database mysql tanpa nama database
        Config::set('database.connections.' . $connection . '.database', null);
        
        // Buat database
        try {
            DB::statement("CREATE DATABASE IF NOT EXISTS `$dbName` CHARACTER SET $charset COLLATE $collation;");
            $this->info("Database '$dbName' created successfully.");
        } catch (\Exception $e) {
            $this->error("Failed to create database '$dbName'. Error: " . $e->getMessage());
            return 1;
        }

        return 0;
    }
}
