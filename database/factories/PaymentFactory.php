<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
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
            'pricing_plan_id' => \App\Models\PricingPlan::factory(),
            'transaction_id' => $this->faker->unique()->uuid(),
            'amount' => $this->faker->numberBetween(100000, 1000000),
        ];
    }
}
