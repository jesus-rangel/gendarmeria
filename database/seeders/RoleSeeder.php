<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        // Permission::create(['name' => 'users.search']);

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'super-admin']);

        $role1 = Role::create(['name' => 'admin']);
        // $role1->givePermissionTo('users.search');

        $role2 = Role::create(['name' => 'user']);

    }
}
