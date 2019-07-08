<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Religion;
use Illuminate\Http\Request;
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
    $applicants = new Applicant(
      $request->all()
    );
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