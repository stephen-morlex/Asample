<?php

namespace App\Http\Controllers;

use App\FacultyLeaders;
use Illuminate\Http\Request;
use App\Dean;
use App\Faculty;

class FacultyLeadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaders =FacultyLeaders::all();
        return view('leader.index',compact('leaders'));
    }
    public function faculty($slug)
    {
        $leaders = Faculty::where('slug', $slug)->first()->leaders()->get();
        return view('leader.leadersCategory', compact('leaders'));
    }
        /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $leader =FacultyLeaders::where('slug', $slug)->firstOrFail();
        return view('leader.show')->with([
            'leader' => $leader,
        ]);
    }
}
