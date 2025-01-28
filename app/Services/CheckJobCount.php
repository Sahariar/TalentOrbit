<?php

namespace App\Services;

use App\Models\{CompanyProfile,JobPost};

class CheckJobCount
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
            ->where('company_profile_id',$companyProfile->id)
            ->where('expiration_date','>=',now())
            ->count();
    }
}
