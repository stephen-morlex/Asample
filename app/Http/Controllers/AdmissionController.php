<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;
use App\Section;
use App\StudentCategory;
use App\Research;
use App\About;
use App\Services;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections=Section::with('admission')->get();
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $financial= Services::where('id',10)->get();
        $internationlStudent= Services::where('id',10)->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();
        $internationlStudent= Services::where('id',9)->get();
        return view('admission.index',compact('sections','ad','studLife','researchNav','abouts','services1','services2','financial','internationlStudent'));

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
        $admission = Section::with('admission')->where('slug', $slug)->firstOrFail();
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts   = About::orderBy('title','asc')->get();
        $financial= Services::where('id',10)->get();
        $admissionServices=Services::inRandomOrder()->limit(4)->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();
        return view('admission.show')->with([
            'admission' => $admission,
            'ad'=>$ad,
            'studLife'=>$studLife,
            'researchNav' => $researchNav,
             'abouts'    => $abouts,
             'services1' => $services1,
             'services2' =>$services2,
             'financial'=>$financial,
             'admissionServices' =>$admissionServices
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
