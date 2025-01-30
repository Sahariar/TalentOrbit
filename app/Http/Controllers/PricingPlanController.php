<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;
use Illuminate\Support\Facades\Auth;

class PricingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function choseplan()
    {
        //
        $pricingPlans = PricingPlan::all();
        $companyProfile = Auth::user()->company_profile;

        return view('dashboard.priceplan.index', compact('pricingPlans', 'companyProfile'));
    }
}
