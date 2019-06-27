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
        $community_services         = Communityservice::all();
        $first_community_service    = Communityservice::take(1)->get();
        return view('communityservice.index', compact('community_services', 'first_community_service'));
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
        $communityservice    = Communityservice::where('slug', $slug)->firstOrFail();
        $communityservices   = Communityservice::orderBy('title')->get();
        return view('communityservice.show')->with([
            'communityservice'    => $communityservice,
            'communityservices'   => $communityservices
        ]);
    }

}
