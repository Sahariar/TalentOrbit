<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\{FetchCompanyProfileJobPosts};
use App\Http\Requests\{CreateOrUpdateCompanyJobPostRequest};
use App\Models\{JobPost,CompanyProfile,Category};

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FetchCompanyProfileJobPosts $fetchCompanyProfileJobPosts)
    {
        $companyProfile = $fetchCompanyProfileJobPosts->fetch()['companyProfile'];

        $jobPosts       = $fetchCompanyProfileJobPosts->fetch()['jobPosts'];

        return view('dashboard.company.job-posts', compact('jobPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->select('id','name')->get();

        return view('dashboard.company.job-posts-create-or-edit',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOrUpdateCompanyJobPostRequest $request)
    {
        $validated = $request->validated();
        
        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->featured_image->getClientOriginalName();

            $request->featured_image->storeAs('images',$featuredImage);
        }else {
            $featuredImage = null;
        }

        $companyProfile = CompanyProfile::query()->where('user_id',auth()->user()->id)->first();

        $newJobPost = JobPost::create([
            'company_profile_id'=> $companyProfile->id,
            'category_id'       => $validated['category'],
            'title'             => $validated['title'],
            'description'       => $validated['description'],
            'apply_link'        => $validated['apply_link'],
            'expiration_date'   => $validated['job_expiration_date'],
            'is_public'         => $validated['is_public'],
            'is_available'      => $validated['is_available'],
            'location'          => $validated['location'],
            'salary_range'      => $validated['salary_range'],
            'featured_image'    => $featuredImage
        ]);

        if (!empty($newJobPost) && !is_null($newJobPost)) {
            return back()->with(['msg' => 'Job Post Created Successfully']);
        }

        return back()->with(['msg' => 'Sorry, could not create job post']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPost $job_post)
    {
        $categories = Category::query()->select('id','name')->get();

        return view('dashboard.company.job-posts-create-or-edit',compact('categories','job_post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateOrUpdateCompanyJobPostRequest $request, JobPost $job_post)
    {
        $validated = $request->validated();
        
        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->featured_image->getClientOriginalName();

            $request->featured_image->storeAs('images',$featuredImage);
        }else {
            $featuredImage = null;
        }

        $companyProfile = CompanyProfile::query()->where('user_id',auth()->user()->id)->first();

        $updatedJobPost = $job_post->update([
            'company_profile_id'=> $companyProfile->id,
            'category_id'       => $validated['category'],
            'title'             => $validated['title'],
            'description'       => $validated['description'],
            'apply_link'        => $validated['apply_link'],
            'expiration_date'   => $validated['job_expiration_date'],
            'is_public'         => $validated['is_public'],
            'is_available'      => $validated['is_available'],
            'location'          => $validated['location'],
            'salary_range'      => $validated['salary_range'],
            'featured_image'    => $featuredImage
        ]);

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
