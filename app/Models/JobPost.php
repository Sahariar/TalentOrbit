<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class JobPost extends Model
{
    /** @use HasFactory<\Database\Factories\JobPostFactory> */
    use HasFactory,Notifiable;

    protected $guarded = ['id'];

    public function company_profile()
    {
        return $this->belongsTo(CompanyProfile::class, 'company_profile_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);

    }

    public function isExpired(): bool
    {
        return $this->expiration_date < Carbon::now();
    }

    public function setPrivate()
    {
        $this->is_public = false;
        $this->save();
    }
}
