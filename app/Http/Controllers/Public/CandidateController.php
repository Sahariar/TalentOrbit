<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\CandidateProfile;

class CandidateController extends Controller
{
    public function index()
    {
        // $candidate = CandidateProfile::withCount('job_applications')->paginate(12);
        $candidates = CandidateProfile::paginate(12);

        return view('public.candidate.index', compact('candidates'));
    }

    public function show(CandidateProfile $candidate)
    {
        $candidate->load('user');

        // $candidateProfile = $candidate;
        return view('public.candidate.show', compact('candidate'));
    }
}
