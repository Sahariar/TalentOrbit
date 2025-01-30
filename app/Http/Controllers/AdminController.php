<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateProfile;
use App\Models\Category;
use App\Models\CompanyProfile;
use App\Models\JobPost;
use App\Models\Payment;
use App\Models\PricingPlan;
use App\Models\Tag;
use App\Models\User;
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
                ->count(),
            'total_candidates' => CandidateProfile::count(),
        ];

        $recent_companies = CompanyProfile::with('user')
            ->latest()->take(5)->get();

        $recent_jobs = JobPost::with('company_profile')
            ->latest()->take(5)->get();

        $recent_candidates = CandidateProfile::with('user')
            ->latest()->take(5)->get();
        $total_sale  = Payment::sum('amount');

        $recent_sale = Payment::latest()->take(5)->get();

        return view('dashboard.index', compact('stats', 'recent_companies', 'recent_jobs', 'recent_candidates' , 'total_sale' , 'recent_sale'));
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

    public function companyProfileApprove(CompanyProfile $companyProfile)
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
        if ($companyProfile->image) {
            Storage::disk('public')->delete($companyProfile->image);
        }
        $user = User::find($companyProfile->user_id);
        if ($user) {
            $user->delete();
        }
        // Delete the company profile
        $companyProfile->delete();

        return redirect()->route('admin.companies.index')->with('success', 'Company has been Deleted Successfully.');
    }

    public function candidates()
    {
        $candidates = CandidateProfile::with('user')->latest()->paginate(10);

        return view('dashboard.admin.candidates.index', compact('candidates'));
    }

    public function candidateProfileShow(CandidateProfile $candidate)
    {
        return view('dashboard.admin.candidates.show', compact('candidate'));
    }

    public function candidateDelete(CandidateProfile $candidate)
    {
        if ($candidate->image) {
            Storage::disk('public')->delete($candidate->image);
        }
        $user = User::find($candidate->user_id);
        if ($user) {
            $user->delete();
        }
        // Delete the candidate profile
        $candidate->delete();

        return redirect()->route('admin.candidates.index')->with('success', 'Candidate has been Deleted Successfully.');
    }

    // job posts

    public function job_posts()
    {
        $jobs = JobPost::with('company_profile')
            ->latest()
            ->paginate(10);

        return view('dashboard.admin.job_posts.index', compact('jobs'));
    }

    public function job_postsShow(JobPost $job)
    {

        return view('dashboard.admin.job_posts.show', compact('job'));
    }
    public function jobToggleStatus(JobPost $job)
    {
        $job->update(['is_active' => !$job->is_active]);

        return redirect()->back()->with('success', $job->is_active ? 'Job has been activated.' : 'Job has been deactivated.');
    }

    public function pricePlans()
    {
        $pricePlans = PricingPlan::latest()->paginate(10);

        return view('dashboard.admin.pricePlan.index', compact('pricePlans'));
    }
    public function pricePlansShow(PricingPlan $pricingplan)
    {
        return view('dashboard.admin.pricePlan.show', compact('pricingplan'));
    }
    public function payments()
    {
        $payments = Payment::latest()->paginate(10);

        return view('dashboard.admin.payment.index', compact('payments'));
    }
    public function paymentShow(PricingPlan $payment)
    {
        return view('dashboard.admin.pricePlan.show', compact('payment'));
    }
    public function cateindex()
    {
        $categories = Category::paginate(10);

        return view('dashboard.admin.categories.index', compact('categories'));
    }

    public function cateCreate()
    {
        return view('dashboard.admin.categories.create-or-edit');
    }

    public function cateStore(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string'
        ]);

        $newCategpry = Category::create([
            'name'          => $validated['name'],
            'description'   => $validated['description']
        ]);

        if (!empty($newCategpry) && !is_null($newCategpry)) {
            return back()->with(['msg' => 'Category Created Successfully']);
        }

        return back()->with(['msg' => 'Something Went Wrong, could not create Category']);
    }

    public function cateShow(Category $category)
    {

        return view('dashboard.admin.categories.show', compact('category'));
    }

    public function cateEdit(Category $category)
    {
        return view('dashboard.admin.categories.create-or-edit',compact('category'));
    }

    public function cateUpdate(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name'          =>'required|string|max:255',
            'description'   =>'required|string'
        ]);

        $updatedCategory = $category->update([
            'name'          => $validated['name'],
            'description'   => $validated['description']
        ]);

        if ($updatedCategory) {
            return back()->with(['msg'=> 'Category Updated Successfully']);
        }

        return back()->with(['msg'=> 'Something Went Wrong, could not update Category']);
    }

    public function cateDelete(Request $request, Category $category)
    {
        if ($category->delete()) {
            return back()->with(['msg'=> 'Category Deleted Successfully']);
        }

        return back()->with(['msg'=> 'Something Went Wrong, could not delete Category']);
    }

    public function tagIndex()
    {
        $tags = Tag::paginate(10);

        return view('dashboard.admin.tags.index', compact('tags'));
    }

    public function tagCreate()
    {
        return view('dashboard.admin.tags.create-or-edit');
    }

    public function tagStore(Request $request)
    {
        $validated = $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'string'
        ]);

        $newTag = Tag::create([
            'title'         => $validated['title'],
            'description'   => $validated['description'],
        ]);

        if (!empty($newTag) && !is_null($newTag)) {
            return back()->with(['msg'=> 'Tag Created Successfully']);
        }

        return back()->with(['msg'=> 'Sorry, could not create Tag']);
    }

    public function tagShow(Tag $tag)
    {

        return view('dashboard.admin.tags.show', compact('tag'));
    }

    public function tagEdit(Tag $tag)
    {
        return view('dashboard.admin.tags.create-or-edit',compact('tag'));
    }

    public function tagUpdate(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'title'         =>'required|string|max:255',
            'description'   =>'string'
        ]);

        $updatedTag = $tag->update([
            'title'         => $validated['title'],
            'description'   => $validated['description'],
        ]);
        if ($updatedTag) {
            return back()->with(['msg'=> 'Tag Updated Successfully']);
        }

        return back()->with(['msg'=> 'Sorry, could not update Tag']);
    }

    public function tagDelete(Request $request, Tag $tag)
    {
        if ($tag->delete()) {
            return back()->with(['msg'=> 'Tag Deleted Successfully']);
        }

        return back()->with(['msg'=> 'Sorry, could not delete Tag']);
    }

}
