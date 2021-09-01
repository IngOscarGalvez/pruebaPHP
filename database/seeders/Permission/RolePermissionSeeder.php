<?php

namespace Database\Seeders\Permission;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Async Role - Permission
     *
     * @return void
     */
    public function run()
    {
        // Async Role - Permission Admin
        $role = Role::where('name','Admin')->first();
        $permission = Permission::where('name' , 'permission Admin')->first();
        $role->givePermissionTo($permission);

        // Async Role - Permission User
        $role = Role::where('name','User')->first();
        $permission = Permission::where('name' , 'permission User')->first();
        $role->givePermissionTo($permission);
    }
}
