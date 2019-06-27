<?php

namespace App\Http\Controllers;

use App\Communityservice;
use Illuminate\Http\Request;

class CommunityserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $community_sercives         = Communityservice::all();
        $first_community_sercive    = Communityservice::take(1)->get();
        return view('communitysercive.index', compact('community_sercives', 'first_community_sercive'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Communityservice  $communityservice
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $communitysercive    = Communityservice::where('slug', $slug)->firstOrFail();
        $communitysercives   = Communityservice::orderBy('title')->get();
        return view('communitysercive.show')->with([
            'communitysercive'    => $communitysercive,
            'communitysercives'   => $communitysercives
        ]);
    }

}
