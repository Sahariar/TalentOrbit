<?php

use App\Models\CompanyProfile;
use App\Models\JobPost;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('fetch job posts', function () {
    // Arrange
    $user = User::factory()->create(['role' => 'company']);
    $companyProfile = CompanyProfile::factory()->create(['user_id' => $user->id]);
    $jobPosts = JobPost::factory()->count(5)->create();
    // Act
    $response = $this->actingAs($user)->get(route('company.job-posts.index'));
    // Assert
    $response->assertStatus(200);
});
