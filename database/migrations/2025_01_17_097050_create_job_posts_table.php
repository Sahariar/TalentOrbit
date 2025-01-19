<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_profile_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('apply_link')->nullable();
            $table->date('expiration_date');
            $table->boolean('is_public')->default(false);
            $table->boolean('is_available')->default(false);
            $table->string('location');
            $table->string('salary_range');
            $table->boolean('is_active')->default(false);
            $table->mediumInteger('apply_count')->default(0);
            $table->mediumInteger('view_count')->default(0);
            $table->string('featured_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
