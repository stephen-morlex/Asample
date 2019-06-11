<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carousel;
use App\Partner;
use App\Event;
use App\News;

use App\Gallery;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events         = Event::latest()->take(2)->get();
        $carousels= carousel::orderBy('id','desc')->take(5)->get();
        $galleries   = Gallery::orderBy('title', 'asc')->take(6)->get();
        $partner    = Partner::inRandomOrder()->get();
        $news       = News::latest()->take(3)->get();
        return view('welcome',compact(
            'carousels',
            'events',
            'news',
            'partner',
            'galleries'
        ));
    }
}
