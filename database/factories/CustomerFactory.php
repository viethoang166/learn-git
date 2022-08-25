<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->randomNumber(6, false),
            'name' => fake()->name(),
            'address' => fake()->address(),
            'phone'=> fake()->phoneNumber(),
            'id_card'=>fake()->unique()->numerify('###########'),
            'bank_name'=>fake()->word(),
            'account_number'=>fake()->numerify('###########'),
            'id_customer'=>fake()->unique()->numerify('#########'),
            'age'=>fake()->randomNumber(6, false),
            'type'=>fake()->randomDigit(),
            'sex'=>fake()->numerify('###########'),
            'date_of_birth'=>fake()->date(),
            'user_create'=>fake()->name(),

        ];
    }
}
