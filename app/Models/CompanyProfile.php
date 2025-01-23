<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CompanyProfile extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyProfileFactory> */
    use HasFactory,Notifiable;


    protected $guarded = ['id'];

    public static function paginate(int $int)
    {
        return static::query()->paginate($int);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function job_posts()
    {
        return $this->hasMany(JobPost::class, 'company_profile_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
