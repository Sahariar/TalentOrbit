<?php

namespace App\Services;

use App\Models\{Payment,CompanyProfile};

class FetchCompanyPayments
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function fetch($companyProfileId)
    {
        return Payment::where('company_profile_id', $companyProfileId)->paginate(5);
    }
}
