<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Membuat Permission
         Permission::create(['name' => 'edit articles']);
         Permission::create(['name' => 'delete articles']);
         Permission::create(['name' => 'publish articles']);
         Permission::create(['name' => 'unpublish articles']);
 
         // Membuat Role dan memberikan permission
         $role = Role::create(['name' => 'Admin']);
         $role->givePermissionTo('edit articles');
 
         $role = Role::create(['name' => 'Super Admin']);
         $role->givePermissionTo(Permission::all());
    }
}
