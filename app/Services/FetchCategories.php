<?php

namespace App\Services;

use App\Models\{Category};

class FetchCategories
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
        return Category::query()->select('id','name')->get();
    }
}
