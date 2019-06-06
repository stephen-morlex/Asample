<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Section;
use App\About;
use App\StudentCategory;
use App\Research;
use App\News;
use App\Services;

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
        $newsSide =News::orderBy('view_count','desc')->take(3)->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('studentLife.index',compact('ad','studentLife','studentSide','studLife','researchNav','abouts','newsSide','services1','services2'));
    }


    public function studentCats($slug)
    {
        $studLife= StudentCategory::all();
        $studentLife=StudentCategory::where('slug',$slug)->first()->students()->paginate(6);
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('studentLife.studentCat', compact('studLife', 'studentLife', 'sectionName','ad','studLife','researchNav','abouts','services1','services2'));

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
        $newsSide =News::orderBy('view_count','desc')->take(3)->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();

        return view('studentLife.show')->with([
            'student' => $student,
            'ad'=>$ad,
            'studLife'=>$studLife,
            'researchNav' =>$researchNav,
            'abouts' => $abouts,
            'studentSide' => $studentSide,
            'newsSide'=>$newsSide,
            'services1' => $services1,
            'services2' => $services2
        ]);
    }
}
