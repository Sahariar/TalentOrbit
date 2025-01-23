<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{

    public function dashboard()
    {

        return view('dashboard.company.index')->with('layout', 'dashboard');
    }

    public function index()
    {
        $companies = CompanyProfile::withCount('job_posts')->paginate(12);
        return view('public.company.index', compact('companies'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(CompanyProfile $company)
    {
        $company->load('user')->loadCount('job_posts');
        $id = $company;
        return view('public.company.show', compact('id'));
    }

}
