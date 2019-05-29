<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;
use App\Program;
use App\About;
use App\Section;
use App\StudentCategory;
use App\Research;
use Illuminate\Support\Facades\DB;
use App\Services;
use  Illuminate\Support\Facades\Session;

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
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('faculty.index',compact('faculties','ad','studLife','research','researchNav','abouts','services1','services2'));

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
        $faculty  = Faculty::where('slug', $slug)->firstOrFail();
        $sections =Program::where('faculty_id',$faculty->id)->orderBy('section_id','asc')->get()->groupBy('section_id');
        $faculty->load('programs')->first();
        $alsoInterested = Faculty::inRandomOrder()->take(5)->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $ad=Section::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts  = About::orderBy('title','asc')->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();
        return view('faculty.show')->with([
            'faculty'   => $faculty,
            'sections'   => $sections,
            'faculty'   => $faculty,
            'alsoInterested' => $alsoInterested,
            'studLife'=>$studLife,
            'ad'=>$ad,
            'researchNav'=>$researchNav,
            'abouts' => $abouts,
            'services1' => $services1,
            'services2' =>$services2,
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
