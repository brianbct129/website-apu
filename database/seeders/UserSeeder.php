<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat User Admin
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),  // Gunakan bcrypt atau Hash::make
        ]);

        // Assign Role ke Admin
        $admin->assignRole('admin');

        // Membuat User Writer
        $superadmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),  // Gunakan bcrypt atau Hash::make
        ]);

        // Assign Role ke superadmin
        $superadmin->assignRole('Super Admin');

        
    }
}

