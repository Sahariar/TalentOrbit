<?php

namespace App\Services;

use App\Models\{CompanyProfile};

class FetchAuthCompanyProfile
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
        return CompanyProfile::query()->where('user_id',auth()->user()->id)->first();
    }
}
