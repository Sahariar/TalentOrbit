<?php

namespace App\Http\Controllers\Company;

use App\Events\JobPosted;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\{FetchCompanyProfileJobPosts,FetchCategories,FetchAuthCompanyProfile,CheckActiveJobCount,CheckJobCount};
use App\Http\Requests\{CreateOrUpdateCompanyJobPostRequest};
use App\Models\{JobPost,Tag};

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FetchCompanyProfileJobPosts $fetchCompanyProfileJobPosts)
    {
        $companyProfile = $fetchCompanyProfileJobPosts->fetch()['companyProfile'];

        $jobPosts       = $fetchCompanyProfileJobPosts->fetch()['jobPosts'];

        return view('dashboard.company.job-posts.index', compact('jobPosts', 'companyProfile'));
    }

    public function search(Request $request,FetchAuthCompanyProfile $fetchAuthCompanyProfile)
    {
        $companyProfile = $fetchAuthCompanyProfile->fetch();

        $jobPosts = JobPost::query()->where('company_profile_id',$companyProfile->id)
                        ->where('title','LIKE','%'.$request->search.'%')
                        ->orWhere('description','LIKE','%'.$request->search.'%')
                        ->orWhere('location','LIKE','%'.$request->search.'%')
                        ->orWhere('salary_range','LIKE','%'.$request->search.'%')
                        ->orWhere('expiration_date','LIKE','%'.$request->search.'%')
                        ->orWhere('apply_link','LIKE','%'.$request->search.'%')
                        ->paginate(5);

        return view('dashboard.company.job-posts.index',compact('jobPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(FetchCategories $fetchCategories, FetchAuthCompanyProfile $fetchAuthCompanyProfile)
    {
        $categories = $fetchCategories->fetch();

        $companyProfile = $fetchAuthCompanyProfile->fetch();

        $tags = Tag::select('id','title')->get();

        return view('dashboard.company.job-posts.create-or-edit',compact('categories', 'companyProfile','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOrUpdateCompanyJobPostRequest $request,FetchAuthCompanyProfile $fetchAuthCompanyProfile, CheckActiveJobCount $checkActiveJobCount, CheckJobCount $checkJobCount)
    {
        $companyProfile = $fetchAuthCompanyProfile->fetch();

        if ($checkActiveJobCount->check($companyProfile) >= 3) {
            return back()->with(['msg' => 'Sorry, there are already 3 active job posts. Please delete one to create a new one']);
        }

        if (!is_null($companyProfile->payment)) {
            if (!is_null($companyProfile->payment->pricing_plan)) {
                $maxJobLimit = $companyProfile->payment->pricing_plan->max_jobs;
            }else{
                $maxJobLimit = 3;
            }
        }else{
            $maxJobLimit = 3;
        }

        if ($checkJobCount->check($companyProfile) >= $maxJobLimit) {
            return back()->with(['msg' => 'Sorry, you have reached the maximum job post limit for the pricing plan you have']);
        }

        $validated = $request->validated();

        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->featured_image->getClientOriginalName();

            $request->featured_image->storeAs('images',$featuredImage,'public');
        }else {
            $featuredImage = null;
        }

        $newJobPost = JobPost::create([
            'company_profile_id'=> $companyProfile->id,
            'category_id'       => $validated['category'],
            'title'             => $validated['title'],
            'description'       => $validated['description'],
            'apply_link'        => $validated['apply_link'],
            'expiration_date'   => $validated['job_expiration_date'],
            'is_available'      => $validated['is_available'],
            'location'          => $validated['location'],
            'salary_range'      => $validated['salary_range'],
            'featured_image'    => $featuredImage
        ]);

        if (isset($validated['tag_id']) && is_array($validated['tag_id'])) {
            $newJobPost->tags()->attach($validated['tag_id']);
        }

        if (!empty($newJobPost) && !is_null($newJobPost)) {
            // Fire the event
            event(new JobPosted($newJobPost));
            return back()->with(['msg' => 'Job Post Created Successfully']);
        }

        return back()->with(['msg' => 'Sorry, could not create job post']);
    }

    /**
     * Display the specified resource.
     */
    public function show(JobPost $job_post, FetchAuthCompanyProfile $fetchAuthCompanyProfile)
    {
        $companyProfile = $fetchAuthCompanyProfile->fetch();

        return view('dashboard.company.job-posts.show',compact('job_post','companyProfile'));
    }

    public function toggle(JobPost $jobPost)
    {
        $toggledJobPost = $jobPost->update([
            'is_active' => !$jobPost->is_active
        ]);

        if ($toggledJobPost) {
            return back()->with(['msg' => 'Job Post Toggled']);
        }

        return back()->with(['msg' => 'Sorry, could not toggle job post']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPost $job_post,FetchCategories $fetchCategories, FetchAuthCompanyProfile $fetchAuthCompanyProfile)
    {
        $categories = $fetchCategories->fetch();

        $companyProfile = $fetchAuthCompanyProfile->fetch();

        $tags = Tag::select('id','title')->get();

        return view('dashboard.company.job-posts.create-or-edit',compact('categories','job_post', 'companyProfile', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateOrUpdateCompanyJobPostRequest $request, JobPost $job_post, FetchAuthCompanyProfile $fetchAuthCompanyProfile)
    {
        $validated = $request->validated();

        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->featured_image->getClientOriginalName();

            $request->featured_image->storeAs('images',$featuredImage,'public');
        }else {
            $featuredImage = null;
        }

        $companyProfile = $fetchAuthCompanyProfile->fetch();

        $updatedJobPost = $job_post->update([
            'company_profile_id'=> $companyProfile->id,
            'category_id'       => $validated['category'],
            'title'             => $validated['title'],
            'description'       => $validated['description'],
            'apply_link'        => $validated['apply_link'],
            'expiration_date'   => $validated['job_expiration_date'],
            'is_available'      => $validated['is_available'],
            'location'          => $validated['location'],
            'salary_range'      => $validated['salary_range'],
            'featured_image'    => $featuredImage
        ]);

        if (isset($validated['tag_id']) && is_array($validated['tag_id'])) {
            $job_post->tags()->attach($validated['tag_id']);
        }

        if ($updatedJobPost) {
            return back()->with(['msg' => 'Job Post Updated Successfully']);
        }

        return back()->with(['msg' => 'Sorry, could not update job post']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobPost $job_post)
    {
        if ($job_post->delete()) {
            return back()->with(['msg' => 'Job Post Deleted Successfully']);
        }

        return back()->with(['msg' => 'Sorry, could not delete job post']);
    }
}
