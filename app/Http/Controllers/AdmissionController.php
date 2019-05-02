<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;
use App\Section;
use App\StudentCategory;
use App\About;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections   = Section::with('admission')->get();
        $ad         = Section::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        return view('admission.index', compact('sections','ad','studLife','abouts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

     /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $admission  = Section::with('admission')->where('slug', $slug)->firstOrFail();
        $ad         = Section::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();

        return view('admission.show')->with([
            'admission' => $admission,
            'ad'        => $ad,
            'studLife'  => $studLife,
            'abouts'    => $abouts
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
