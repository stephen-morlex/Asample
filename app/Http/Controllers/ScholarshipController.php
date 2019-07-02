<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;

class ScholarshipController extends Controller
{
    //

    public function index()
    {
        $scholarships = Scholarship::all();
        return view('scholarships.index',compact('scholarships'));
    }

    public function show($slug)
    {
        //
        $scholarships  = Scholarship::where('slug', $slug)->firstOrFail();
        $allscholarships   = Scholarship::orderBy('title')->get();
        return view('scholarships.show')->with([
            'scholarships'     => $scholarships,
            'allscholarships'   => $allscholarships
        ]);
    }
}
