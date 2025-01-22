<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use App\Models\CompanyProfile;
use App\Models\JobPost;
use App\Notifications\CompanyProfileApprove;
use App\Notifications\CompanyProfileReject;
use Illuminate\Support\Facades\Storage;

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

    public function companyProfileShow(CompanyProfile $companyProfile)
    {
        $companyProfile->load(['user', 'job_posts' => function ($query) {
            $query->latest();
        }]);

        return view('dashboard.admin.companies.show', compact('companyProfile'));
    }
    public function CompanyProfileApprove(CompanyProfile $companyProfile)
    {
        $companyProfile->update(['is_approved' => true]);
        $companyProfile->user->notify(new CompanyProfileApprove);

        return redirect()->back()->with('success', 'Company has been approved successfully.');
    }
    public function CompanyProfileReject(CompanyProfile $companyProfile)
    {
        $companyProfile->update(['is_approved' => false]);
        $companyProfile->user->notify(new CompanyProfileReject);

        return redirect()->back()->with('success', 'Company has been Rejected.');
    }

    public function companyProfileDelete(CompanyProfile $companyProfile)
    {
        if($companyProfile->image){
            Storage::disk('public')->delete($companyProfile->image);
        }
        $companyProfile->user->delete();
        return redirect()->route('admin.companies.index')->with('success', 'Company has been Deleted Successfully.');
    }

    public function candidates()
    {
        $candidates = CandidateProfile::with('user')->latest()->paginate(10);

        return view('dashboard.admin.candidates.index', compact('candidates'));
    }
}
