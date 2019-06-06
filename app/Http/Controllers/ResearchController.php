<?php

namespace App\Http\Controllers;

use App\Research;
use Illuminate\Http\Request;
use App\Section;
use App\StudentCategory;
use App\About;
use App\News;
use App\Services;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researches= Research::orderBy('id','asc')->take(1)->get();
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $sideResearch=Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $newsSide =News::orderBy('view_count','desc')->take(5)->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('research.index',compact('ad','studLife','researchNav','sideResearch','researches','abouts','newsSide','services1','services2'));
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
        $newsSide =News::orderBy('view_count','desc')->take(5)->get();
        $section =Section::all();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('research.show')->with([
            'research' => $research,
            'section' => $section,
            'studLife'=>$studLife,
            'ad'=>$ad,
            'researchNav'=>$researchNav,
            'sideResearch' =>$sideResearch,
            'abouts' =>$abouts,
            'newsSide' => $newsSide,
            'services1'=>$services1,
            'services2' => $services2
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
