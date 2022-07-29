<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::factory() ->count(10)
        ->state(new Sequence(
            fn () => [
                'sender_id' => User::all()->random(),
            ],
        ))
            ->create();
    }
}
