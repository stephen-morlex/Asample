<?php

namespace App\Http\Controllers;

use App\Research;
use Illuminate\Http\Request;
use App\Section;
use App\StudentCategory;
use App\About;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research= Research::latest()->take(1)->get();
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $sideResearch=Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        return view('research.index',compact('ad','studLife','researchNav','sideResearch','research','abouts'));
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

        $research = Research::where('slug', $slug)->firstOrFail();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $ad=Section::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $sideResearch=Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $section =Section::all();
        return view('research.show')->with([
            'research' => $research,
            'section' => $section,
            'studLife'=>$studLife,
            'ad'=>$ad,
            'researchNav'=>$researchNav,
            'sideResearch' =>$sideResearch,
            'abouts' =>$abouts
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function edit(Research $research)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Research $research)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy(Research $research)
    {
        //
    }
}
