<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function job_posts()
    {
        return $this->hasMany(JobPost::class);
    }

    public function candidate_profiles()
    {
        return $this->belongsToMany(CandidateProfile::class);
    }
}
