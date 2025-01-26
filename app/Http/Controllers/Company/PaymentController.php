<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\{FetchAuthCompanyProfile,FetchCompanyPayments};
use App\Models\{Payment};

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FetchAuthCompanyProfile $fetchAuthCompanyProfile,FetchCompanyPayments $fetchCompanyPayments)
    {
        $companyProfile = $fetchAuthCompanyProfile->fetch();

        $payments       = $fetchCompanyPayments->fetch($companyProfile->id);

        return view('dashboard.company.payments.index', compact('payments','companyProfile'));
    }

    public function search(Request $request,FetchAuthCompanyProfile $fetchAuthCompanyProfile)
    {
        $companyProfile = $fetchAuthCompanyProfile->fetch();

        $payments       = Payment::where('company_profile_id', $companyProfile->id)
                            ->where('amount','LIKE','%'.$request->search.'%')
                            ->paginate(5);

        return view('dashboard.company.payments.index', compact('payments'));
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
    public function show(Payment $payment, FetchAuthCompanyProfile $fetchAuthCompanyProfile)
    {
        $companyProfile = $fetchAuthCompanyProfile->fetch();

        return view('dashboard.company.payments.show', compact('payment', 'companyProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        return view('dashboard.company.payments.create-or-edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([
            'amount'    => 'required|numeric',
        ]);

        $updatedPayment = $payment->update([
            'amount'    => $validated['amount']
        ]);

        if ($updatedPayment) {
            return back()->with(['msg' => 'Payment updated successfully']);
        }

        return back()->with(['msg' => 'Failed to update payment']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        if ($payment->delete()) {
            return back()->with(['msg' => 'Payment deleted successfully']);
        }

        return back()->with(['msg' => 'Failed to delete payment']);
    }
}
