<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Job;

class MyJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('my_job.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Job::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('create', Job::class);
    }

    public function edit(Job $myJob)
    {
        Gate::authorize('update', $myJob);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $myJob)
    {
        Gate::authorize('update', $myJob);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $myJob)
    {
        Gate::authorize('delete', $myJob);
    }
}
