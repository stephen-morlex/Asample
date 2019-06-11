<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\StudentCategory;

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
        return view('studentLife.index',compact('studentLife'));
    }


    public function studentCats($slug)
    {
        $studLife= StudentCategory::all();
        $studentLife=StudentCategory::where('slug',$slug)->first()->students()->paginate(6);
        return view('studentLife.studentCat', compact('studLife', 'studentLife'));

    }
   /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $student = Student::where('slug', $slug)->firstOrFail();
        return view('studentLife.show')->with([
            'student' => $student,]);
    }
}
