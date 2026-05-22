<?php

namespace App\Http\Controllers;

use App\Models\ListJobs;

class JobController extends Controller
{
    
    public function index()
    {
        $jobs = ListJobs::all();
        return view('jobs.index', compact('jobs'));
    }

    
    public function show($id)
    {
        $job = ListJobs::findOrFail($id);
        return view('jobs.show', compact('job'));
    }
}