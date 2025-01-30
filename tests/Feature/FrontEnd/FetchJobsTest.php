<?php

use App\Models\Category;
use App\Models\JobPost;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('fetch job lists in the front-end', function () {
    // Arrange
    $categories = Category::factory()->count(5)->create();
    $jobPosts = JobPost::factory()->count(5)->create(['category_id' => $categories->random()->id]);
    // Act
    $response = $this->get(route('jobs'));
    // Assert
    $response->assertStatus(200);
});
