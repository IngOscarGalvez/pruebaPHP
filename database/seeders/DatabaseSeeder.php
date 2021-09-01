<?php

namespace Database\Seeders;

use Database\Seeders\Edifice\EdificeSeeder;
use Database\Seeders\Permission\PermissionSeeder;
use Database\Seeders\Permission\RolePermissionSeeder;
use Database\Seeders\Permission\RoleSeeder;
use Database\Seeders\User\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission
        $this->call(
            [
                RoleSeeder::class,
                PermissionSeeder::class,
                RolePermissionSeeder::class
            ]
        );

        // Application
        $this->call(
            [
                UsersSeeder::class,
                EdificeSeeder::class
            ]
        );
    }
}
