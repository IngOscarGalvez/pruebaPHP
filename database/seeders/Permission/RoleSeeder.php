<?php

namespace Database\Seeders\Permission;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Create Roles
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'User']);
    }
}
