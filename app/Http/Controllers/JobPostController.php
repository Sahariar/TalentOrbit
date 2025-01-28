<?php

namespace App\Http\Controllers;

use App\Models\{JobPost, Tag, Category};
use App\Services\{FetchTags};
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FetchTags $fetchTags)
    {
        $jobPosts   = JobPost::where('is_public',true)->with(['company_profile', 'category'])->paginate(10);

        $tags       = $fetchTags->fetch();

        $categories = Category::query()->with(['job_posts:id,category_id,title'])->select('id','name')->paginate(10);

        return view('public.job.index', compact('jobPosts','tags', 'categories'));
    }

    /**
     * Increment Apply Count
     */
    public function apply(Request $request, JobPost $job)
    {
        if (!is_null($job->apply_link)) {
            $job->increment('apply_count');

            return redirect($job->apply_link);
        }

        return back()->with(['msg' => 'Sorry, could not redirect to apply link']);
    }

    /**
     * Filter by Location, Tag & Salary Range
     */
    public function filter(Request $request, FetchTags $fetchTags)
    {
        $validated = $request->validate([
            'tag_id'    => 'string|required',
            'location'  => 'string|max:255|required',
        ]);

        $jobPosts = Tag::where('id',$validated['tag_id'])
            ->first()
            ->job_posts()
            ->where('location','LIKE','%'.$validated['location'].'%')
            ->paginate(10);

        $tags = $fetchTags->fetch();

        $categories = Category::query()->with(['job_posts:id,category_id,title'])->select('id','name')->paginate(10);

        return view('public.job.index', compact('jobPosts','tags', 'categories'));
    }

    /**
     * Find Jobs by Location & Company/Job Name
     */
    public function find(Request $request, FetchTags $fetchTags)
    {
        $validated = $request->validate([
            'location' => 'string|required|max:255',
            'name'     =>'string|required|max:255',
        ]);

        $jobPosts = JobPost::query()->where('location','LIKE','%'.$validated['location'].'%')
            ->orWhere('title','LIKE','%'.$validated['name'].'%')
            ->paginate(10);

        $tags = $fetchTags->fetch();

        $categories = Category::query()->with(['job_posts:id,category_id,title'])->select('id','name')->paginate(10);

        return view('public.job.index', compact('jobPosts','tags', 'categories'));
    }

    /**
     * Find Category based Jobs
     */
    public function categoryJobs(Category $category, FetchTags $fetchTags)
    {
        $jobPosts = JobPost::query()
                ->where('category_id',$category->id)
                ->paginate(10);
                
        $tags = $fetchTags->fetch();

        $categories = Category::query()->with(['job_posts:id,category_id,title'])->select('id','name')->paginate(10);

        return view('public.job.index', compact('jobPosts','tags','categories'));
        
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
