<?php

namespace App\Http\Controllers;

use App\About;
use App\Section;
use App\Program;
use App\StudentCategory;
use Illuminate\Http\Request;
use App\Research;
use App\Services;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about = About::skip(10)->take(1)->get();
        return view('about.index', compact('about'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $about  = About::where('slug', $slug)->firstOrFail();
        return view('about.show')->with([
            'about'     => $about,
        ]);
    }
}