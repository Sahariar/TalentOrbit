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
    public function companyProfile(){
        return $this->hasMany(CompanyProfile::class);
    }
}
