<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Section;
use App\About;
use App\StudentCategory;
use App\Research;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $studentLife= Student::take(1)->get();
        $studentSide= Student::skip(0)->take(50)->get();
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        return view('studentLife.index',compact('ad','studentLife','studentSide','studLife','researchNav','abouts'));
    }


    public function studentCats($slug)
    {
         $studLife= StudentCategory::all();

         $studentLife=StudentCategory::where('slug',$slug)->first()->students()->paginate(6);


        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        return view('studentLife.studentCat', compact('studLife', 'studentLife', 'sectionName','ad','studLife','researchNav','abouts'));

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
        $studentSide= Student::skip(0)->take(50)->get();
        $student = Student::where('slug', $slug)->firstOrFail();
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        return view('studentLife.show')->with([
            'student' => $student,
            'ad'=>$ad,
            'studLife'=>$studLife,
            'researchNav' =>$researchNav,
            'abouts' => $abouts,
            'studentSide' => $studentSide
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
