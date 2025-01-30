<?php

namespace App\Services;

use App\Models\Tag;

class FetchTags
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
        return Tag::query()->select('id', 'title')->get();
    }
}
