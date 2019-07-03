<?php

namespace App\Http\Controllers;

use App\Governor;
use Illuminate\Http\Request;
use DB;

class GovernorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $governances = Governor::all();
        // return view('governance.index', compact('governances'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Governor  $governor
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $members = DB::table('governor_member')->select('*')->where('slug',$slug)->get();

        return view('governance.show')->with([
            'members'     => $members,
        ]);
    }

}
