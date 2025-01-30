<?php

namespace App\Services;

use App\Models\CompanyProfile;
use App\Models\JobPost;

class FetchCompanyStats
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function total_jobs(CompanyProfile $companyProfile)
    {
        return JobPost::query()->where('company_profile_id', $companyProfile->id)->count();
    }

    public function active_jobs(CompanyProfile $companyProfile)
    {
        return JobPost::query()
            ->where('company_profile_id', $companyProfile->id)
            ->where('is_active', true)
            ->where('expiration_date', '>=', now())->count();
    }
}
