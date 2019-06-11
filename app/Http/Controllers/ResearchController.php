<?php

namespace App\Http\Controllers;

use App\Research;
use Illuminate\Http\Request;

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
        return view('research.index',compact('researches'));
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
        return view('research.show')->with([
            'research' => $research,
        ]);
    }
}
