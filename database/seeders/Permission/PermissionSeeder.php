<?php

namespace Database\Seeders\Permission;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Create Permission
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::create(['name' => 'permission Admin']);

        $permission = Permission::create(['name' => 'permission User']);
    }
}
