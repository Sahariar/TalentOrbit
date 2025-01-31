<?php

namespace App\Listeners;

use App\Events\JobPosted;
use App\Mail\JobNotification;
use App\Models\CandidateProfile;
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
        if (! $job) {
            logger('Job object is null in JobPosted event.');
        }
        // dd($job->category);
        if ($job->category) {
            // Find candidates subscribed to job's categories
            $subscribedCandidates = CandidateProfile::whereHas('subscribedCategories', function ($query) use ($job) {
                $query->where('category_id', $job->category->id);
            })->get();

            // dd($subscribedCandidates);
            // Send notifications
            foreach ($subscribedCandidates as $subscriber) {
                try {
                    Mail::to($subscriber->user->email)
                        ->queue(new JobNotification($event->job, $subscriber->user->candidate_profile));

                        \Illuminate\Support\Facades\Log::info("Queued job notification for {$subscriber->user->email}", [
                    'job_id' => $event->job->id,
                            'user_id' => $subscriber->user->id
                    ]);
                } catch (\Exception $e) {
                    \Illuminate\Support\Facades\Log::error("Mail failed for {$subscriber->user->email}: " . $e->getMessage(), [
                        'exception' => $e,
                        'job_id' => $event->job->id
                    ]);
                }
            }
            logger('Job object is fired and send mail in JobPosted event.');
        }
    }
}
