<?php

namespace App\Services;

use App\Models\CompanyProfile;
use App\Models\JobPost;

class CheckActiveJobCount
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function check(CompanyProfile $companyProfile)
    {
        return JobPost::query()
            ->where('company_profile_id', $companyProfile->id)
            ->where('is_active', true)
            ->where('expiration_date', '>=', now())
            ->count();
    }
}
