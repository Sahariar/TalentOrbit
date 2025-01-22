<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyProfileFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function job_posts()
    {
        return $this->hasMany(JobPost::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
