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
use App\ClergyType;
use App\ModeOfStudy;
use App\Sources;
use Redirect;
use PDF;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sources = Sources::orderBy('name','desc')->get();
        $modeofstudy = ModeOfStudy::orderBy('name','desc')->get();
        $clergytypes = ClergyType::orderBy('name','desc')->get();
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
        return view('application.index',compact('sections','ad','studLife','faculties','sources','program','religion','researchNav','abouts','services1','services2','clergytypes','modeofstudy'));

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
        $applicant = new Applicant();
        $applicant->high_school = $request->get('high_school');
        $applicant->school_address = $request->get('school_address');
        $applicant->when_started_highschool = $request->get('when_started_highschool');
        $applicant->when_ended_highschool = $request->get('when_ended_highschool');
        $applicant->colledge = $request->get('colledge');
        $applicant->colledge_address = $request->get('colledge_address');
        $applicant->when_started_colledge = $request->get('when_started_colledge');
        $applicant->when_ended_colledge = $request->get('when_ended_colledge');
        $applicant->firstname = $request->get('firstname');
        $applicant->lastname = $request->get('lastname');
        $applicant->surname = $request->get('surname');
        $applicant->gender = $request->get('gender');
        $applicant->dob = $request->get('dob');
        $applicant->marital_status = $request->get('marital_status');
        $applicant->current_address = $request->get('current_address');
        $applicant->email = $request->get('email');
        $applicant->telephone = $request->get('telephone');
        $applicant->country = $request->get('country');
        $applicant->id_number = $request->get('id_number');
        $applicant->religion = $request->get('religion');
        $applicant->disabled = $request->get('disabled');
        $applicant->disability_specification = $request->get('disability_specification');
        $applicant->clergy_type = $request->get('clergy_type');
        $applicant->religious_order = $request->get('religious_order');  
        $applicant->campus = $request->get('campus');
        $applicant->level = $request->get('level');
        $applicant->first_choice = $request->get('first_choice');
        $applicant->second_choice = $request->get('second_choice');
        $applicant->third_choice = $request->get('third_choice');
        $applicant->mode_of_study = $request->get('mode_of_study');
        $applicant->when_to_start = $request->get('when_to_start');
        $applicant->cuea_before = $request->get('cuea_before');
        $applicant->previous_reg_number = $request->get('previous_reg_number');
        $applicant->sponsor = $request->get('sponsor');
        $applicant->sponsor_name = $request->get('sponsor_name');
        $applicant->sponsor_address = $request->get('sponsor_address');
        $applicant->sponsor_telephone = $request->get('sponsor_telephone');
        $applicant->sponsor_email = $request->get('sponsor_email');
        $applicant->next_of_kin = $request->get('next_of_kin');
        $applicant->next_of_kin_address = $request->get('next_of_kin_address');
        $applicant->next_of_kin_telephone = $request->get('next_of_kin_telephone');
        $applicant->next_of_kin_email = $request->get('next_of_kin_email');
        $applicant->sources = $request->get('sources');
        $applicant->other_sources = $request->get('other_sources');
        $applicant->id_number_file = $request->get('id_number_file');
        $applicant->colledge_file = $request->get('colledge_file');
        $applicant->high_school_file = $request->get('high_school_file');
 

        $applicant->save();
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

    public function postApplicationAjax()
    {
        //
    }
    public function pdf(){
        $sources = Sources::orderBy('name','desc')->get();
        $modeofstudy = ModeOfStudy::orderBy('name','desc')->get();
        $clergytypes = ClergyType::orderBy('name','desc')->get();
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
       
      
     $applicants =Applicant::get();
 
     $pdf = PDF::loadView('application.application_pdf',compact('sections','ad','studLife','faculties','sources','program','religion','researchNav','abouts','services1','services2','clergytypes','modeofstudy','applicants'));
   
     return $pdf->download('applicants.pdf');
    
    }
}
