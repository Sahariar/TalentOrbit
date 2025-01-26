<?php

namespace App\Listeners;

use App\Events\JobPosted;
use App\Mail\JobNotification;
use App\Models\CandidateProfile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyCandidates
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(JobPosted $event): void
    {
        //
        $job = $event->job;
        if (!$job) {
            logger('Job object is null in JobPosted event.');
        }
        // dd($job);
        if ($job->categories && $job->categories->isNotEmpty()) {
            // Find candidates subscribed to job's categories
            $subscribedCandidates = CandidateProfile::whereHas('subscribedCategories', function ($query) use ($job) {
                $query->where('categories.id', $job->category_id);
            })->get();
            // Send notifications
            foreach ($subscribedCandidates as $subscriber) {
                Mail::to($subscriber->user->email)->queue(new JobNotification($event->job , $subscriber->user->candidate_profile));
            }
        }
    }
}
