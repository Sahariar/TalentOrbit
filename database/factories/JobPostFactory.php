<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_profile_id'    => \App\Models\CompanyProfile::factory(),
            'category_id'           => \App\Models\Category::factory(),
            'title'                 => $this->faker->jobTitle(),
            'description'           => $this->faker->optional()->paragraph(),
            'apply_link'            => $this->faker->optional()->url(),
            'expiration_date'       => $this->faker->date(),
            'is_public'             => $this->faker->boolean(),
            'is_available'          => $this->faker->boolean(),
            'location'              => $this->faker->city(),
            'salary_range'          => $this->faker->numberBetween(10000, 100000),
            'is_active'             => $this->faker->boolean(),
            'apply_count'           => $this->faker->numberBetween(0, 100),
            'view_count'            => $this->faker->numberBetween(0, 100),
            'featured_image'        => fake()->imageUrl(),
        ];
    }
}
