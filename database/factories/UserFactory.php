<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'email' => fake()->safeEmail(),
            'username' => fake()->userName(),
            'password'=> fake()->password(),
            'phone'=> fake()->phoneNumber(),
            'address' => fake()->address(),
            'type' => fake()->randomDigit(),
            'parent_id' => fake()->randomNumber(4, false),
            'verified_at' => now(),
            'closed' => false,
            'code' => fake()->randomNumber(5, false),
            'social_type' => fake()->randomDigit(),
            'social_id' => fake()->unique()->numerify('############'),
            'social_name' => fake()->name(),
            'social_nickname' => fake()->word(),
            'social_avatar' => fake()->word(),
            'description' => fake()->sentence(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
