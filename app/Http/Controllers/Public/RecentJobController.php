<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\JobPost;
use Illuminate\Http\Request;

class RecentJobController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $recentJobs = JobPost::orderBy('created_at', 'desc')->take(4)->get();

        return view('home', compact('recentJobs'));
    }
}
