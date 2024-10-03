<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class CreateDatabase extends Command
{
    protected $signature = 'make:database';
    protected $description = 'Create the database if it does not exist';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $database = Config::get('database.connections.mysql.database');

        Config::set('database.connections.mysql.database', null);
        DB::statement("CREATE DATABASE IF NOT EXISTS $database");
        Config::set('database.connections.mysql.database', $database);

        $this->info("Database $database created or already exists.");
    }
}

