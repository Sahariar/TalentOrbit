<?php

namespace App\Services;

use App\Models\{JobPost,CompanyProfile};

class FetchCompanyProfileJobPosts
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function fetch()
    {
        $companyProfile = CompanyProfile::query()->where('user_id',auth()->user()->id)->first();

        $jobPosts       = JobPost::query()->where('company_profile_id',$companyProfile->id)->paginate(5);

        return [
            'companyProfile'    => $companyProfile,
            'jobPosts'          => $jobPosts
        ];
    }
}
