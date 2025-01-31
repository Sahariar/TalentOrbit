<?php

namespace App\Services;

use App\Models\CompanyProfile;
use App\Models\JobPost;
use App\Models\Payment;

class JobLimitService
{
    /**
     * Check if company can create more jobs based on active jobs and plan limit
     */
    public function checkJobLimits(CompanyProfile $companyProfile): array
    {
        // Get active jobs count
        $activeJobsCount = $this->getActiveJobsCount($companyProfile);
        // dd($activeJobsCount);
        // Check active jobs limit (maximum 3 active jobs)
        if ($activeJobsCount >= 3) {
            return [
                'can_post' => false,
                'message' => 'Sorry, there are already 3 active job posts. Please delete one to create a new one',
            ];
        }

        // Get maximum job limit from pricing plan
        $maxJobLimit = $this->getMaxJobLimit($companyProfile);

        // Get total jobs count
        $totalJobsCount = $this->getTotalJobsCount($companyProfile);

        // Check total jobs limit based on plan
        if ($totalJobsCount >= $maxJobLimit) {
            return [
                'can_post' => false,
                'message' => 'Sorry, you have reached the maximum job post limit for the pricing plan you have',
                'max_limit' => $maxJobLimit,
                'current_count' => $totalJobsCount,
            ];
        }

        return [
            'can_post' => true,
            'message' => 'Can create job post',
            'active_jobs' => $activeJobsCount,
            'total_jobs' => $totalJobsCount,
            'max_limit' => $maxJobLimit,
            'remaining_slots' => $maxJobLimit - $totalJobsCount,
        ];
    }

    /**
     * Get count of active jobs for company
     */
    private function getActiveJobsCount(CompanyProfile $companyProfile): int
    {
        return JobPost::where('company_profile_id', $companyProfile->id)
            ->where('is_active', true)
            ->count();
    }

    /**
     * Get total count of jobs for company
     */
    private function getTotalJobsCount(CompanyProfile $companyProfile): int
    {
        return JobPost::where('company_profile_id', $companyProfile->id)
            ->count();
    }

    /**
     * Get maximum job limit based on company's pricing plan
     */
    private function getMaxJobLimit(CompanyProfile $companyProfile): int
    {
        // Default limit for free plan
        $maxJobLimit = 3;

        if (! is_null($companyProfile->payment)) {
            if (! is_null($companyProfile->payment->pricing_plan)) {
                // dd($companyProfile->payment->pricing_plan);
                $maxJobLimit = $companyProfile->payment->pricing_plan->max_jobs;
            }
        }

        return $maxJobLimit;
    }

    /**
     * Get remaining job slots for company
     */
    public function getRemainingSlots(CompanyProfile $companyProfile): int
    {
        $maxLimit = $this->getMaxJobLimit($companyProfile);
        $totalJobs = $this->getTotalJobsCount($companyProfile);

        return max(0, $maxLimit - $totalJobs);
    }
}
