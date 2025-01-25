<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\{JobPost};

class CheckJobExpirationDate implements ShouldQueue
{
    use Queueable;

    protected $jobPost;

    /**
     * Create a new job instance.
     */
    public function __construct(JobPost $jobPost)
    {
        $this->jobPost = $jobPost;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->jobPost->isExpired()) {
            $this->jobPost->setPrivate();
        }
    }
}
