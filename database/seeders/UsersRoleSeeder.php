<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<=10; $i++) {
            DB::table('users_roles') -> insert([
                'user_id' => User::select('id')->orderByRaw("RAND()")->first()->id,
                'roles_id' => Role::select('id')->orderByRaw("RAND()")->first()->id,
                'created_at' => now(),
                'updated_at'=> now(),
            ]);
        }
    }
}
