<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use App\Models\CompanyProfile;
use App\Models\JobPost;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $stats = [
            'total_companies' => CompanyProfile::count(),
            'pending_companies' => CompanyProfile::where('is_approved', false)
                ->count(),
            'total_jobs' => JobPost::count(),
            'active_jobs' => JobPost::where('is_active', true)
                ->where('expiration_date', '>=', now())->count(),
            'total_candidates' => CandidateProfile::count(),
        ];

        $recent_companies = CompanyProfile::with('user')
            ->latest()->take(5)->get();

        $recent_jobs = JobPost::with('company_profile')
            ->latest()->take(5)->get();

        $recent_candidates = CandidateProfile::with('user')
            ->latest()->take(5)->get();

        return view('dashboard.index', compact('stats', 'recent_companies', 'recent_jobs', 'recent_candidates'));
    }

    public function companies()
    {
        $companies = CompanyProfile::with('user')
            ->withCount('job_posts')->latest()->paginate(10);

        return view('dashboard.admin.companies.index', compact('companies'));
    }

    public function companyShow(CompanyProfile $companyProfile)
    {

        $companyProfile->load(['user', 'job_posts' => function ($query) {
            $query->latest();
        }]);

        return view('dashboard.admin.companies.show', compact('companyProfile'));
    }
}
