<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CandidateProfile extends Model
{
    /** @use HasFactory<\Database\Factories\CandidateProfileFactory> */
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

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function subscribedCategories()
    {
        return $this->belongsToMany(Category::class, 'candidate_profile_category');
    }
}
