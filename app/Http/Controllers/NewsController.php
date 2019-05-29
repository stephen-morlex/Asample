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
use App\NewsCategory;
use App\Services;

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
        $newsCategories = NewsCategory::latest()->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('cueaNews.index', compact('sections', 'programs', 'ad', 'studLife','researchNav','abouts', 'news', 'newsCategories','services1','services2'));
    }



    public function newsCategory($slug)
    {
        //
        $sections    = Section::take(4)->get();
        $programs    = Program::all();
        $ad          = Section::orderBy('name','asc')->get();
        $studLife    = StudentCategory::orderBy('name','asc')->get();
        $abouts      = About::orderBy('title','asc')->get();
        $news=NewsCategory::where('slug', $slug)->first()->news;
        $researchNav = Research::orderBy('name','asc')->get();
        $newsCategories = newsCategory::latest()->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('cueaNews.index', compact('sections', 'programs', 'ad', 'studLife','researchNav','abouts', 'news', 'newsCategories','services1','services2'));
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
        $newsItem->increment('view_count',1);
        $sections    = Section::take(4)->get();
        $programs    = Program::all();
        $ad          = Section::orderBy('name','asc')->get();
        $studLife    = StudentCategory::orderBy('name','asc')->get();
        $abouts      = About::orderBy('title','asc')->get();
        $news        = News::latest()->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $newsCategories = newsCategory::latest()->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('cueaNews.show')->with([
            'newsItem'    => $newsItem,
            'sections'    => $sections,
            'programs'    =>$programs,
            'ad'          =>$ad,
            'studLife'    =>$studLife,
            'abouts'      =>$abouts,
            'news'        => $news,
            'researchNav' => $researchNav,
            'newsCategories' => $newsCategories,
            'services1' =>$services1,
            'services2'=>$services2
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
