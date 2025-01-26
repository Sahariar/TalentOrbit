<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateProfileController extends Controller
{
    public function index()
    {
        // $candidate = CandidateProfile::withCount('job_applications')->paginate(12);
        $candidates = CandidateProfile::all();

        return view('public.candidate.index', compact('candidates'));
    }

    public function categories()
    {
        $user = Auth::user();
        // Get subscribed category IDs or an empty array
        $subscribedCategories = $user->candidate_profile
        ? $user->candidate_profile->subscribedCategories->pluck('id')->toArray()
        : [];
        //
        $categories = Category::all();
        // dd($categories);
        return view('dashboard.candidate.categories' , compact('categories' , 'subscribedCategories'));
    }
    public function dashboard()
    {
        //
        $user = Auth::user();
        $subscribedCategoriesCount = $user->candidate_profile && $user->candidate_profile->subscribedCategories
    ? $user->candidate_profile->subscribedCategories->count()
    : 0;

        return view('dashboard.candidate.index' , compact('subscribedCategoriesCount'))->with('layout', 'dashboard');
    }
    public function subscribe(Request $request)
    {

    $user = Auth::user();
        // dd($user, $user->candidate_profile);
        if ($user->candidate_profile) {
            $user->candidate_profile->subscribedCategories()->sync($request->categories);
            return redirect()->back()->with('success', 'Your subscriptions have been updated!');
        }
        //
        return redirect()->back()->with('success', 'Your subscriptions have been updated!');
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
    public function show(CandidateProfile $candidate)
    {
        $candidate->load('user');;
        $candidateProfile = $candidate;
        return view('public.candidate.show', compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CandidateProfile $candidateProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CandidateProfile $candidateProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CandidateProfile $candidateProfile)
    {
        //
    }
}
