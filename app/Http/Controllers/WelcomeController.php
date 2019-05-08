<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\About;
use App\StudentCategory;
use App\Research;
<<<<<<< HEAD
use App\Carousel;
use App\Partner;
use App\Event;
use App\News;
=======
use App\carousel;
use App\Event;
>>>>>>> 5051e1df1e87d04e8ddf9b6144c96224bb54b21f

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $events     = Event::latest()->take(2)->get();
        $admissions = Section::orderBy('name')->get();
        $carousels  = Carousel::latest()->get();
=======
        $events         = Event::latest()->take(2)->get();
        $admissions = Section::orderBy('name')->get();
        $carousels= carousel::latest()->first()->get();
>>>>>>> 5051e1df1e87d04e8ddf9b6144c96224bb54b21f
        $ad         = Section::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();
        $partner    = Partner::orderBy('name', 'asc')->get();
        $news       = News::latest()->take(3)->get();


        return view('welcome',compact(
            'admission',
            'ad',
            'abouts',
            'studLife',
<<<<<<< HEAD
            'carousel',
            'researchNav',
            'partner',
            'news',
=======
>>>>>>> 5051e1df1e87d04e8ddf9b6144c96224bb54b21f
            'carousels',
            'researchNav',
            'events'
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
