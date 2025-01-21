<?php

namespace Database\Seeders;

use App\Models\CandidateProfile;
use App\Models\Category;
use App\Models\CompanyProfile;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\JobPost;
use App\Models\Payment;
use App\Models\PricingPlan;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        CompanyProfile::factory(5)->create();
        CandidateProfile::factory(5)->create();
        JobPost::factory(25)->create();
        Category::factory(10)->create();
        Tag::factory(10)->create();
        Payment::factory(2)->create();
        PricingPlan::factory(2)->create();
    }
}
