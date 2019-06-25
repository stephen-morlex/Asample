<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Program;
class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties =Faculty::latest()->get();
        return view('faculty.index',compact('faculties'));
    }
   /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $faculty  = Faculty::where('slug', $slug)->firstOrFail();
        $sections =Program::where('faculty_id',$faculty->id)->orderBy('section_id','asc')->get()->groupBy('section_id');
        $faculty->load('programs')->orderBy('name','asc');
        $faculty->load('dean')->orderBy('name','asc');
        $alsoInterested = Faculty::inRandomOrder()->take(5)->get();
        $leaders= $faculty->leaders;
        return view('faculty.show')->with([
            'faculty'   => $faculty,
            'sections'   => $sections,
            'faculty'   => $faculty,
            'alsoInterested' => $alsoInterested,
            'leaders' => $leaders
        ]);
    }
}
