<?php

namespace App\Http\Controllers;

use App\AboutParent;
use App\News;

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
        $aboutParents = AboutParent::all();
        $news = News::latest()->take(5)->get();
        return view('parent.index', compact('aboutParents', 'news'));
    }

    public function newsCategory($slug)
    {
        //
        $news = NewsCategory::where('slug', $slug)->first()->news;
        $newsCategories = newsCategory::latest()->get();
        return view(
            'cueaNews.index',
            compact('news', 'newsCategories')
        );
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
        return view('parent.show')->with([
            'aboutParents'  => $aboutParents, 'parentTabs'    => $parentTabs,
        ]);
    }
}