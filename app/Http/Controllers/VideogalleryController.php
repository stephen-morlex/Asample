<?php

namespace App\Http\Controllers;

use App\Videogallery;
use Illuminate\Http\Request;

class VideogalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $videos   = Videogallery::orderBy('title', 'asc')->get();
        return view('videogallery.index', compact('videos'));
    }


}
