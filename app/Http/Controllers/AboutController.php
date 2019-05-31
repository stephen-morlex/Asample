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
        $about      = About::first()->take(1)->get();
        $sections   = Section::take(4)->get();
        $programs   = Program::all();
        $ad         = Section::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();
        $abouts     = About::skip(1)->take(10)->get();
        $researchNav= Research::orderBy('name','asc')->get();
        $services1  = Services::orderBY('name','asc')->take(6)->get();
        $services2  = Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('about.index', compact('sections', 'programs', 'ad', 'studLife', 'abouts','about','researchNav','services1','services2'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


/**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $about      = About::where('slug', $slug)->firstOrFail();
        $admissions = Section::orderBy('name')->get();
        $ad         = Section::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $researchNav= Research::orderBy('name','asc')->get();
        $services1  = Services::orderBY('name','asc')->take(6)->get();
        $services2  = Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('about.show')->with([
            'about'     => $about,
            'ad'        => $ad,
            'studLife'  => $studLife,
            'abouts'    => $abouts,
            'admissions'=> $admissions,
            'researchNav' => $researchNav,
            'services1' => $services1,
            'services2' => $services2
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
