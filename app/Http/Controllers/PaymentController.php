<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PricingPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function processPayment(Request $request)
    {
        //
        $request->validate([
            'picing_plan_id' => 'required|exists:pricing_plans,id',
        ]);

        $pricingPlan = PricingPlan::find($request->pricing_plan_id);

        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        // Create a payment intent for the selected plan
        $paymentIntent = PaymentIntent::create([
        'amount' => $pricingPlan->price * 100, // Amount in cents
        'currency' => 'usd',
        'description' => $pricingPlan->description,
        ]);

         // Store payment details in the database
    $payment = Payment::create([
        'company_profile_id' => Auth::user()->company_profile->id,
        'pricing_plan_id' => $pricingPlan->id,
        'transaction_id' => $paymentIntent->id,
        'amount' => $pricingPlan->price,
    ]);

    return view('payment.confirm', compact('paymentIntent , payment'));
    }
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
