<?php

namespace App\Http\Controllers;

use App\Models\{CompanyProfile};
use Illuminate\Http\Request;
use App\Services\{FetchAuthCompanyProfile};
use App\Http\Requests\{CreateOrUpdateCompanyProfileRequest};

class CompanyProfileController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('dashboard.company.index')->with('layout', 'dashboard');
    }

    public function index(FetchAuthCompanyProfile $fetchAuthCompanyProfile)
    {
        $companyProfile = $fetchAuthCompanyProfile->fetch();

        return view('dashboard.company.profile.index', compact('companyProfile'));
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
    public function show(CompanyProfile $company_profile)
    {
        return view('dashboard.company.profile.show', compact('company_profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyProfile $company_profile)
    {
        return view('dashboard.company.profile.create-or-edit',compact('company_profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateOrUpdateCompanyProfileRequest $request, CompanyProfile $company_profile)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->image->getClientOriginalName();

            $request->image->storeAs('public/images', $image);
        }else {
            $image = null;
        }

        $updatedCompanyProfile = $company_profile->update([
            'name'          => $validated['name'],
            'description'   => $validated['description'],
            'phone_number'  => $validated['phone_number'],
            'url'           => $validated['url'],
            'linkedin_url'  => $validated['linkedin_url'],
            'image'         => $image
        ]);

        if ($updatedCompanyProfile) {
            return back()->with(['msg' => 'Profile updated successfully']);
        }

        return back()->with(['msg' => 'Failed to update profile']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyProfile $company_profile)
    {
        if ($company_profile->delete()) {
            return back()->with(['msg' => 'Profile deleted successfully']);
        }

        return back()->with(['msg' => 'Failed to delete profile']);
    }
}
