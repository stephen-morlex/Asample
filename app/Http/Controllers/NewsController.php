<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Section;
use App\Program;
use App\About;
use App\StudentCategory;
use App\Contact;
use App\Research;
use App\newsCategory;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sections    = Section::take(4)->get();
        $programs    = Program::all();
        $ad          = Section::orderBy('name','asc')->get();
        $studLife    = StudentCategory::orderBy('name','asc')->get();
        $abouts      = About::orderBy('title','asc')->get();
        $news        = News::latest()->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $newsCategories = newsCategory::latest()->get();

        return view('cueaNews.index', compact('sections', 'programs', 'ad', 'studLife','researchNav','abouts', 'news', 'newsCategories'));
    }


 
    public function newsCategory($slug)
    {
        //
        $sections    = Section::take(4)->get();
        $programs    = Program::all();
        $ad          = Section::orderBy('name','asc')->get();
        $studLife    = StudentCategory::orderBy('name','asc')->get();
        $abouts      = About::orderBy('title','asc')->get();
        $news        = News::latest()->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $newsCategories = newsCategory::latest()->get();

        return view('cueaNews.index', compact('sections', 'programs', 'ad', 'studLife','researchNav','abouts', 'news', 'newsCategories'));
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

        $newsItem    = News::where('slug', $slug)->firstOrFail();
        $sections    = Section::take(4)->get();
        $programs    = Program::all();
        $ad          = Section::orderBy('name','asc')->get();
        $studLife    = StudentCategory::orderBy('name','asc')->get();
        $abouts      = About::orderBy('title','asc')->get();
        $news        = News::latest()->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $newsCategories = newsCategory::latest()->get();

        return view('cueaNews.show')->with([
            'newsItem'    => $newsItem,
            'sections'    => $sections,
            'programs'    =>$programs,
            'ad'          =>$ad,
            'studLife'    =>$studLife,
            'abouts'      =>$abouts,
            'news'        => $news,
            'researchNav' => $researchNav,
            'newsCategories' => $newsCategories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
