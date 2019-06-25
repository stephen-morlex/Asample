<?php

namespace App\Http\Controllers;

use App\communitysercive;
use Illuminate\Http\Request;

class CommunityserciveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $community_sercives = communitysercive::all();
        $first_community_sercive      = communitysercive::take(1)->get();
        return view('communitysercive.index', compact('communitysercives', 'first_community_sercive'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\communitysercive  $communitysercive
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $communitysercive    = communitysercive::where('slug', $slug)->firstOrFail();
        $communitysercives   = communitysercive::orderBy('title')->get();
        return view('communitysercive.show')->with([
            'administrative_office'    => $communitysercive,
            'administrative_offices'   => $communitysercives
        ]);
    }
}
