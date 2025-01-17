<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PricingPlan>
 */
class PricingPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_profile_id' => \App\Models\CompanyProfile::factory(),
            'type'               => $this->faker->randomElement(['free', 'premium']),
            'title'              => $this->faker->sentence(),
            'description'        => $this->faker->optional()->paragraph(),
            'price'              => $this->faker->numberBetween(0, 100000),
        ];
    }
}
