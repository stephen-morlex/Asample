<?php

namespace App\Http\Controllers;

use App\Gallery;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $galleries   = Gallery::orderBy('title', 'asc')->get();

        return view('gallery.index', compact('galleries'));

    }
}
