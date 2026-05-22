<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListJobs;

class JobController extends Controller
{
    public function index()
    {
        $jobs = ListJobs::all();
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        ListJobs::create([
            'title' => $request->title,
            'description' => $request->description,
            'company' => $request->company,
            'location' => $request->location,
            'salary' => $request->salary,
        ]);

        return redirect('/jobs');
    }

    public function edit($id)
    {
        $job = ListJobs::findOrFail($id);
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $job = ListJobs::findOrFail($id);

        $job->update([
            'title' => $request->title,
            'description' => $request->description,
            'company' => $request->company,
            'location' => $request->location,
            'salary' => $request->salary,
        ]);

        return redirect('/jobs');
    }

    public function destroy($id)
    {
        $job = ListJobs::findOrFail($id);
        $job->delete();

        return redirect('/jobs');
    }
}