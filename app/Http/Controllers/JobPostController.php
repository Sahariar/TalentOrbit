<?php

namespace App\Http\Controllers;

use App\Models\{JobPost, Tag};
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobPosts = JobPost::where('is_public',true)->with(['company_profile', 'category'])->paginate(10);

        $tags = Tag::select('id','title')->get();

        return view('public.job.index', compact('jobPosts','tags'));
    }

    public function apply(Request $request, JobPost $job)
    {
        if (!is_null($job->apply_link)) {
            $job->increment('apply_count');

            return redirect($job->apply_link);
        }

        return back()->with(['msg' => 'Sorry, could not redirect to apply link']);
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
        $job->increment('view_count');
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
