<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyProfile>
 */
class CompanyProfileFactory extends Factory
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
            'name'          => fake()->company(),
            'description'   => fake()->optional()->paragraph(),
            'phone_number'  => fake()->phoneNumber(),
            'url'           => fake()->url(),
            'is_subscribed' => fake()->boolean(),
            'is_approved'   => fake()->boolean(),
            'linkedin_url'  => fake()->url(),
        ];
    }
}
