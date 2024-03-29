<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //SchoolSeeder::class,
            UserSeeder::class,
            //CustomerSeeder::class,
            //PermissionGroupSeeder::class,
            //PermissionSeeder::class,
            //RoleSeeder::class,
            //UsersRoleSeeder::class,
            //TagSeeder::class,
            //TaggableSeeder::class,
            //RolesPermissionSeeder::class,
            //AttachmentSeeder::class,
            //MessageSeeder::class,
        ]);
    }
}
