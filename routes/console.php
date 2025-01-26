<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\{Artisan,Schedule};
use Illuminate\Database\Eloquent\Collection;
use App\Models\{JobPost};

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

JobPost::where('is_public',true)->chunkById(100, function(Collection $jobPosts) {
    foreach ($jobPosts as $jobPost) {
        Schedule::command('check-job-expiration-date ' . $jobPost->id)->dailyAt('21:00');
    }
});