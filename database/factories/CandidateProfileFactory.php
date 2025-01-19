<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CandidateProfile>
 */
class CandidateProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'       => \App\Models\User::factory(),
            'name'          => fake()->name(),
            'description'   => fake()->optional()->paragraph(),
            'phone_number'  => fake()->phoneNumber(),
            'url'           => fake()->url(),
            'is_subscribed' => fake()->boolean(),
            'image'         => fake()->imageUrl(),
        ];
    }
}
