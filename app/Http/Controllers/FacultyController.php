<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;
use App\Program;
use App\Section;
use App\StudentCategory;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::latest()->get();
        $ad        = Section::orderBy('name','asc')->get();
        $studLife  = StudentCategory::orderBy('name','asc')->get();

        return view('faculty.index',compact('faculties','ad','studLife'));

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
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $faculty  = Faculty::with('programs')->get();
        $faculty  = Faculty::where('slug', $slug)->firstOrFail();
        $alsoInterested = Faculty::inRandomOrder()->take(5)->get();
        $studLife = StudentCategory::orderBy('name','asc')->get();
        $ad       = Section::orderBy('name','asc')->get();
        $section  = Section::all();

        return view('faculty.show')->with([
            'faculty' => $faculty,
            'section' => $section,
            'faculty' => $faculty,
            'alsoInterested' => $alsoInterested,
            'studLife'=>$studLife,
            'ad'=>$ad
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        //
    }
}
