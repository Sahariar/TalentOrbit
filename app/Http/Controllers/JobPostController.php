<?php

namespace App\Http\Controllers;

use App\Models\{Category, JobPost, Tag};
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobPosts = JobPost::where('is_public',true)->with(['company_profile', 'category'])->paginate(10);

        $categories = Category::withCount(['job_posts'])->paginate(6);

        $tags = Tag::select('id','title')->get();

        return view('public.job.index', compact('jobPosts','tags', 'categories'));
    }

    public function filter(Request $request)
    {
        dd($request->all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // event(new JobPosted($job));
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
    public function show(JobPost $job)
    {
        $job->load('company_profile', 'category');
        $jobPost = $job;

        return view('public.job.show', compact('jobPost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPost $jobPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobPost $jobPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobPost $jobPost)
    {
        //
    }
}
