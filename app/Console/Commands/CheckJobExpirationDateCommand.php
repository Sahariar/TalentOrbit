<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use App\Jobs\CheckJobExpirationDate;
use App\Models\JobPost;

class CheckJobExpirationDateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check-job-expiration-date {jobPost}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Job Expiration Date & Set to Private if Expired';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        CheckJobExpirationDate::dispatch(JobPost::find($this->argument('jobPost')));

        Artisan::call('queue:work', ['--once' => true]);
    }
}
