<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use Illuminate\Http\Request;

class CandidateProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function dashboard()
    {
        //
        return view('dashboard.candidate.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(CandidateProfile $candidateProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CandidateProfile $candidateProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CandidateProfile $candidateProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CandidateProfile $candidateProfile)
    {
        //
    }
}
