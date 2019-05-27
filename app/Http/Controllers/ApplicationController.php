<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Religion;
use App\Faculty;
use App\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Section;
use App\StudentCategory;
use App\Research;
use App\About;
use App\Services;

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
        $religion   = Religion::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();
        return view('application.index',compact('sections','ad','studLife','faculties','program','religion','researchNav','abouts','services1','services2'));

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
            'firstname'      => 'required|max:150|min:2',
            'surname'      => 'required|max:150|min:2',
            'lastname'      => 'required|max:150|min:2',
            'gender'      => 'required|max:10|min:2',
            'dob'       => 'required',
            'country'      => 'required',
            'id_number' =>'required',
            'current_address'   => 'required',
            'telephone' => 'required|numeric',
            'marital_status'  => 'required',
            'religion'       => 'required',
            'disabled' =>'required',
            'disability_specification' => 'required',
            'high_school' => 'required',
            'school_address' =>'',
            'when_started_highschool' =>'required',
            'when_ended_highschool' => 'required',
            'colledge' => 'required',
            'colledge_address' => '',
            'when_started_colledge' =>'',
            'when_ended_colledge' => '',
            'programme_type' => 'required',
            'when_to_start' => 'required',
            'cuea_before' => '',
            'reg_no' => '',
            'first_choice' => 'required',
            'second_choice' => 'required',
            'third_choice' => '',
            'sponsor' => 'required',
            'sponsor_name' => 'required',
            'sponsor_address' => 'required',
            'sponsor_telephone' => 'required',
            'next_of_kin' => '',
            'next_of_kin_address' => '',
            'next_of_kin_telephone' => '',
            'source' => 'required',
        ]);


        Applicant::create($request->all());


        Session::flash('success','thanks for Applying to Catholic University of Eastern Africa');
        return redirect()->back();

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
        $services1=   Services::orderBY('name','asc')->take(6)->get();
        $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();
        return view('admission.show')->with([
            'admission' => $admission,
            'ad'=>$ad,
            'studLife'=>$studLife,
            'researchNav' => $researchNav,
            'abouts'    => $abouts,
            'services1' => $services1,
            'services2'=>$services2
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
