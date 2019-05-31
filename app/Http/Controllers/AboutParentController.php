<?php

namespace App\Http\Controllers;

use App\AboutParent;
use Illuminate\Http\Request;
use App\About;
use App\Section;
use App\Program;
use App\StudentCategory;
use App\Research;
use App\News;
use App\Event;
use App\Services;
class AboutParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aboutParents     = AboutParent::all();
        $about       = About::first()->take(1)->get();
        $sections    = Section::take(4)->get();
        $programs    = Program::all();
        $ad          = Section::orderBy('name','asc')->get();
        $news        = News::latest()->take(5)->get();
        $events      = Event::latest()->take(5)->get();
        $studLife    = StudentCategory::orderBy('name','asc')->get();
        $abouts      = About::skip(1)->take(10)->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $services1   = Services::orderBY('name','asc')->take(6)->get();
        $services2   = Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('parent.index', compact('sections', 
            'programs', 'services2', 'studLife', 'abouts',
            'about', 'researchNav','services1','ad', 
            'aboutParents', 'news', 'events')
        );
    }






    public function newsCategory($slug)
    {
        //
        $sections    = Section::take(4)->get();
        $programs    = Program::all();
        $ad          = Section::orderBy('name','asc')->get();
        $studLife    = StudentCategory::orderBy('name','asc')->get();
        $abouts      = About::orderBy('title','asc')->get();
        $news        = NewsCategory::where('slug', $slug)->first()->news;
        $researchNav = Research::orderBy('name','asc')->get();
        $newsCategories = newsCategory::latest()->get();
        $services1   = Services::orderBY('name','asc')->take(6)->get();
        $services2   = Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('cueaNews.index', compact('sections', 
            'programs', 'ad', 'studLife','researchNav',
            'abouts', 'news', 'newsCategories',
            'services1','services2')
        );
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
     * @param  \App\AboutParent  $aboutParent
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $aboutParents = AboutParent::where('slug', $slug)->firstOrFail();
        $parentTabs = AboutParent::all();
        $ad         = Section::orderBy('name','asc')->get();
        $events     = Event::latest()->take(5)->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();
        $abouts     = About::skip(1)->take(10)->get();
        $researchNav= Research::orderBy('name','asc')->get();
        $services1  = Services::orderBY('name','asc')->take(6)->get();
        $services2  = Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('parent.show')->with([
            'aboutParents'  => $aboutParents,
            'parentTabs'    => $parentTabs,
            'ad'            => $ad,
            'events'        => $events,
            'studLife'      => $studLife,
            'abouts'        => $abouts,
            'researchNav'   => $researchNav,
            'services1'     => $services1,
            'services2'     => $services2
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutParent  $aboutParent
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutParent $aboutParent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutParent  $aboutParent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutParent $aboutParent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutParent  $aboutParent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutParent $aboutParent)
    {
        //
    }
}
