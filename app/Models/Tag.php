<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function job_posts()
    {
        return $this->belongsToMany(JobPost::class);
    }

    public function candidate_profiles()
    {
        return $this->belongsToMany(CandidateProfile::class);
    }
}
