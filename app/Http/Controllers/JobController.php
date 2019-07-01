<?php

namespace App\Http\Controllers;

use App\Job;

class JobController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('job.index', compact('jobs'));
    }
}