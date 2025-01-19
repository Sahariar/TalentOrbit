<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function company_profile()
    {
        return $this->belongsTo(CompanyProfile::class);
    }

    public function pricing_plan()
    {
        return $this->belongsTo(PricingPlan::class);
    }
}
