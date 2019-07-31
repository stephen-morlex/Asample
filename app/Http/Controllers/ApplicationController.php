<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Religion;
use Illuminate\Http\Request;
use App\Http\Requests\Application;
use Illuminate\Support\Facades\Session;
use App\Section;
use App\About;
use App\Intake;
use App\Program;
use App\ClergyType;
use App\ModeOfStudy;
use App\Sources;
use Redirect;
use PDF;
use Storage;
use App\Sponsor;
use Mail;

class ApplicationController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $sources = Sources::orderBy('name', 'desc')->get();
    $modeofstudy = ModeOfStudy::orderBy('name', 'desc')->get();
    $clergytypes = ClergyType::orderBy('name', 'desc')->get();
    $sections = Section::with('admission')->get();
    $program   = Program::orderBy('name', 'asc')->get();
    $religion   = Religion::orderBy('name', 'asc')->get();
    $intakes = Intake::orderBy('intake', 'desc')->get();
    $sponsor = Sponsor::orderBY('name', 'desc')->get();
    return view('application.index', compact('sections', 'program', 'sources', 'religion', 'intakes', 'sponsor', 'clergytypes', 'modeofstudy'));
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
  public function store(Application $request)
  {


    // $applicants = implode(", ", $request->get('sources'));

   
   $sources = implode(", ", $request->get('sources'));

    $applicants = new Applicant();

      $applicants->high_school= $request->high_school;
      $applicants->school_address= $request->school_address;
      $applicants->when_started_highschool =$request->when_started_highschool;
      $applicants->when_ended_highschool =$request->when_ended_highschool;
      $applicants->college =$request->college;
      $applicants->college_address =$request->college_address;
      $applicants->when_started_college =$request->when_started_college;
      $applicants->when_ended_college =$request->when_ended_college;
      $applicants->high_school2 =$request->high_school2;
      $applicants->school_address2 =$request->school_address2;
      $applicants->when_started_highschool2 =$request->when_started_highschool2;
      $applicants->when_ended_highschool2 =$request->when_ended_highschool2;
      $applicants->college2 =$request->college2;
      $applicants->college_address2 =$request->college_address2;
      $applicants->when_started_college2 =$request->when_started_college2;
      $applicants->when_ended_college2 =$request->when_ended_college2;
      $applicants->high_school3 =$request->high_school3;
      $applicants->school_address3 =$request->school_address3;
      $applicants->when_started_highschool3 =$request->when_started_highschool3;
      $applicants->when_ended_highschool3 =$request->when_ended_highschool3;
      $applicants->college3 =$request->college3;
      $applicants->college_address3 =$request->college_address3;
      $applicants->when_started_college3 =$request->when_started_college3;
      $applicants->when_ended_college3 =$request->when_ended_college3;
      $applicants->firstname =$request->firstname;
      $applicants->lastname =$request->lastname;
      $applicants->surname =$request->surname;
      $applicants->gender =$request->gender;
      $applicants->dob =$request->dob;
      $applicants->marital_status =$request->marital_status;
      $applicants->current_address = $request->current_address;
      $applicants->email =$request->email;
      $applicants->telephone =$request->telephone;
      $applicants->country =$request->country;
      $applicants->id_number =$request->id_number;
      $applicants->religion =$request->religion;
      $applicants->disabled =$request->disabled;
      $applicants->disability_specification =$request->disability_specification;
      $applicants->clergy_type =$request->clergy_type;
      $applicants->religious_order =$request->religious_order;  
      $applicants->campus =$request->campus;
      $applicants->level =$request->level;
      $applicants->first_choice =$request->first_choice;
      $applicants->second_choice =$request->second_choice;
      $applicants->third_choice =$request->third_choice;
      $applicants->mode_of_study =$request->mode_of_study;
      $applicants->when_to_start =$request->when_to_start;
      $applicants->cuea_before =$request->cuea_before;
      $applicants->previous_reg_number =$request->previous_reg_number;
      $applicants->sponsor =$request->sponsor;
      $applicants->sponsor_name =$request->sponsor_name;
      $applicants->sponsor_address =$request->sponsor_address;
      $applicants->sponsor_telephone =$request->sponsor_telephone;
      $applicants->sponsor_email =$request->sponsor_email;
      $applicants->next_of_kin =$request->next_of_kin;
      $applicants->next_of_kin_address =$request->next_of_kin_address;
      $applicants->next_of_kin_telephone =$request->next_of_kin_telephone;
      $applicants->next_of_kin_email =$request->next_of_kin_email;
      $applicants->sources =$sources; 
      $applicants->other_sources =$request->other_sources;
    
    //   Saving id file
    if ($request->hasFile('id_number_file')) {
      $file = $request->file('id_number_file');
      $name = str_slug($request->surname) . '_' . 'id' .  '.' . $file->getClientOriginalExtension();
      $destinationPath = storage_path('app/public/applications');
      $imagePath = $destinationPath . "/" .  $name;
      $file->move($destinationPath, $name);
      $applicants->id_number_file = $name;
    }
    //   Saving college file
    if ($request->hasFile('college_file')) {
      $file = $request->file('college_file');
      $name = str_slug($request->surname) . '_' . 'college' . '.' . $file->getClientOriginalExtension();
      $destinationPath = storage_path('app/public/applications');
      $imagePath = $destinationPath . "/" .  $name;
      $file->move($destinationPath, $name);
      $applicants->college_file = $name;
    }

    //   Saving high school file
    if ($request->hasFile('high_school_file')) {
      $file = $request->file('high_school_file');
      $name = str_slug($request->surname) . '_' . 'high_school' . '.' . $file->getClientOriginalExtension();
      $destinationPath = storage_path('app/public/applications');
      $imagePath = $destinationPath . "/" .  $name;
      $file->move($destinationPath, $name);
      $applicants->high_school_file = $name;
    }
    
     $applicants->save();

        


    Mail::send(
      'application.mail',
      array(
        'surname' => $request->get('surname'),
        'email' => $request->get('email'),
        'telephone' => $request->get('telephone'),
      ),
      function ($message) {
        $message->from('admission@cuea.edu');
        $message->to('admission@cuea.edu', 'Applicant')->subject('Your appliaction has been received successfully,We will get back to you as soon as possible!');
      }
    );
    Session::flash('success', 'Your Application has been received sucessfuly, we will get back  to you soon');
    return redirect()->back();
  }


  public function applicationpdf($id)
  {
    $user = Applicant::findOrFail($id);
    return view('application.application_pdf', compact('user'));
  }
  public function generatepdf($id)
  {
    $filename = Applicant::select('surname', 'firstname')->where('id', $id)->get();

    foreach ($filename as $p) {
      // code
      $ff = $p->firstname;
      $sn = $p->surname;
    }
    $user = Applicant::findOrFail($id);

    $pdf = PDF::loadView('application.application_pdf', compact('user'));

    set_time_limit(300);
    return $pdf->download($ff . "_" . $sn . ".pdf");
  }
}