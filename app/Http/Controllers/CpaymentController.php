<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PricingPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CpaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function processPayment(Request $request)
    {
        //
        // $request->validate([
        //     'picing_plan_id' => 'required|exists:pricing_plans,id',
        // ]);
        // dd($request->pricing_plan_id);
        $pricingPlan = PricingPlan::find($request->pricing_plan_id);
        Stripe::setApiKey(env('STRIPE_SECRET'));
        // Create a payment intent for the selected plan
        $paymentIntent = PaymentIntent::create([
        'amount' => $pricingPlan->price * 100, // Amount in cents
        'currency' => 'usd',
        'description' => $pricingPlan->title,
        ]);

         // Store payment details in the database
        $payment = Payment::create([
        'company_profile_id' => Auth::user()->company_profile->id,
        'pricing_plan_id' => $pricingPlan->id,
        'transaction_id' => $paymentIntent->id,
        'amount' => $pricingPlan->price,
        ]);
        $companyProfile = Auth::user()->company_profile;
    return view('dashboard.payment.confirm',
    [
        'pricingPlan' => $pricingPlan,
        'paymentIntent' => $paymentIntent,
        'clientSecret' => $paymentIntent->client_secret,
    ]);
    }
    public function success()
    {
        //
        $companyProfile = Auth::user()->company_profile;
        return view('dashboard.payment.success', compact('companyProfile'));
    }


}
