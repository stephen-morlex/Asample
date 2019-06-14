<?php

namespace App\Http\Controllers;

use App\News;

use App\NewsCategory;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news        = News::latest()->paginate(8);
        $newsCategories = NewsCategory::latest()->get();
        $newsSide = News::orderBy('view_count', 'desc')->take(5)->get();
        return view('cueaNews.index', compact('news', 'newsCategories', 'newsSide'));
    }



    public function newsCategory($slug)
    {
        $news = NewsCategory::where('slug', $slug)->first()->news()->paginate(8);

        return view('cueaNews.index', compact('news'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $newsItem = News::where('slug', $slug)->firstOrFail();
        $newsItem->increment('view_count', 1);
        News::where('slug', '=', $slug)
            ->update([
                // Increment the view counter field
                'view_count' => $newsItem->view_count,
                // Prevent the updated_at column from being refreshed every time there is a new view
                'updated_at' => \DB::raw('updated_at')
            ]);
        return view('cueaNews.show')->with([
            'newsItem' => $newsItem,
        ]);
    }
}