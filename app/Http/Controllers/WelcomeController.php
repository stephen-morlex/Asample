<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\About;
use App\StudentCategory;
use App\Research;
use App\carousel;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions = Section::orderBy('name')->get();
        $carousels= carousel::all();
        $ad         = Section::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();


        return view('welcome',compact(
            'admission',
            'ad',
            'abouts',
            'studLife',
            'carousels',
            'researchNav'
        ));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
