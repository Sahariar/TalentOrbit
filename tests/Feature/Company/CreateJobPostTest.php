<?php

use App\Models\Category;
use App\Models\CompanyProfile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('create a job post', function () {
    // Arrange
    $user = User::factory()->create(['role' => 'company']);
    $companyProfile = CompanyProfile::factory()->create(['user_id' => $user->id]);
    $category = Category::factory()->count(5)->create();
    $jobPostFormData = [
        'company_profile_id' => $companyProfile->id,
        'category_id' => $category->first()->id,
        'title' => 'Test Title',
        'description' => 'Test Description',
        'apply_link' => 'https://forms.google.com',
        'expiration_date' => '2025-05-05',
        'is_available' => true,
        'location' => 'Ka-115/6/1,Mohakhali Dakkhinpara, Dhaka',
        'salary_range' => '100000-200000',
        'featured_image' => 'blueish-bg.jpeg',
    ];
    // Act
    $response = $this->actingAs($user)->post(route('company.job-posts.store'));
    // Assert
    $response->assertStatus(302);
});
