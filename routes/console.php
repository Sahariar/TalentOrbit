<?php

use App\Models\JobPost;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

JobPost::where('is_public', true)->chunkById(100, function (Collection $jobPosts) {
    foreach ($jobPosts as $jobPost) {
        Schedule::command('check-job-expiration-date '.$jobPost->id)->dailyAt('21:00');
    }
});
