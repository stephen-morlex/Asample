<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Faculty;
use App\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Section;
use App\StudentCategory;
use App\Research;
use App\About;

class ApplicationController extends Controller
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
        $faculties   = faculty::orderBy('name','asc')->get();
        $program   = Program::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        return view('application.index',compact('sections','ad','studLife','faculties','program','researchNav','abouts'));

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
        $this->validate($request, [
            'fullName'      => 'required|max:150|min:2',
            'email'         => 'required|email',
            'countryCode'   => 'required|numeric',
            'phoneNumber'   => 'required|numeric',
            'faculty'       => 'required',
            'program'       => 'required',
            'modeOfStudy'   => 'required',
            'doctorate'     => 'required',
            'masters'       => 'required',
            'degree'        => 'required',
            'diploma'       => 'required',
            'certificate'   => 'required',
            'phd'           => 'required',
        ]);

        Applicant::create($request->all());

        Session::flash('success','thanks for Applying to Catholic University of Eastern Africa');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $admission = Section::with('admission')->where('slug', $slug)->firstOrFail();
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts   = About::orderBy('title','asc')->get();
        return view('admission.show')->with([
            'admission' => $admission,
            'ad'=>$ad,
            'studLife'=>$studLife,
            'researchNav' => $researchNav,
            'abouts'    => $abouts
        ]);
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
