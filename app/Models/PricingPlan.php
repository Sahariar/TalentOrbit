<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    /** @use HasFactory<\Database\Factories\PricingPlanFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function companyProfile()
    {
        return $this->hasMany(CompanyProfile::class);
    }

    public function isPremium()
    {
        return $this->max_jobs > 0 && $this->price > 0;
    }

    public function pricingPlan()
    {
        return $this->belongsTo(PricingPlan::class);
    }
}
