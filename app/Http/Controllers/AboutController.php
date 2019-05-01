<?php

namespace App\Http\Controllers;

use App\About;
use App\Section;
use App\Program;
use App\StudentCategory;
use Illuminate\Http\Request;

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
        $sections   = Section::take(4)->get();
        $programs   = Program::all();
        $ad         = Section::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();

        return view('about.index', compact('sections', 'programs', 'ad', 'studLife'));
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
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
        $admission  = Section::with('admission')->where('slug', $slug)->firstOrFail();
        $ad         = Section::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();

        return view('about.show')->with([
            'admission' => $admission,
            'ad'        => $ad,
            'studLife'  => $studLife
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
