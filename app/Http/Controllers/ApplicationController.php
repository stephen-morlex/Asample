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
use PDF;
use App\Sponsor;
use App\Sources;
use App\ModeOfStudy;
use App\ClergyType;

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
        $sponsor = Sponsor::orderBY('name','desc')->get();
        return view('application.index',compact('sections','ad','studLife','faculties','program','religion','researchNav','abouts','services1','services2','sponsor'));

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

                     // dynamic section
        ############################################################################
        $this->validate($request, [
        'high_school' =>'required',
        'school_address' =>'required',
        'when_started_highschool' =>'required',
        'when_ended_highschool' =>'required',
        'college' =>'',
        'college_address' =>'',
        'when_started_college' =>'',
        'when_ended_college' =>'',
        'high_school2' =>'',
        'school_address2' =>'',
        'when_started_highschool2' =>'',
        'when_ended_highschool2' =>'',
        'college2' =>'',
        'college_address2' =>'',
        'when_started_college2' =>'',
        'when_ended_college2' =>'',
        'high_school3' =>'',
        'school_address3' =>'',
        'when_started_highschool3' =>'',
        'when_ended_highschool3' =>'',
        'college3' =>'',
        'college_address3' =>'',
        'when_started_college3' =>'',
        'when_ended_college3' =>'',
        'firstname' =>'required',
        'lastname' =>'required',
        'surname' =>'required',
        'gender' =>'required',
        'dob' =>'required',
        'marital_status' =>'required',
        'current_address' =>'required',
        'email' =>'required|email',
        'telephone' =>'required',
        'country' =>'required',
        'id_number' =>'required',
        'religion' =>'required',
        'disabled' =>'required',
        'disability_specification' =>'',
        'clergy_type' =>'',
        'religious_order' =>'',  
        'campus' =>'required',
        'level' =>'required',
        'first_choice' =>'required',
        'second_choice' =>'required',
        'third_choice' =>'required',
        'mode_of_study' =>'required',
        'when_to_start' =>'required',
        'cuea_before' =>'',
        'previous_reg_number' =>'numeric',
        'sponsor' =>'required',
        'sponsor_name' =>'',
        'sponsor_address' =>'',
        'sponsor_telephone' =>'',
        'sponsor_email' =>'',
        'next_of_kin' =>'required',
        'next_of_kin_address' =>'required',
        'next_of_kin_telephone' =>'required',
        'next_of_kin_email' =>'required',
        'sources' =>'required',
        'other_sources' =>'',

        'passport_picture' => 'required',
        'id_number_file' =>'required',
        'college_file' =>'required',
        'high_school_file' =>'required',
     ]);
      // $imageName = time().'.'.request()->passport_picture->getClientOriginalExtension();

  

      //   request()->passport_picture->move(storage_path('app/application'), $imageName);


      //  if($request->hasfile('passport_picture')) 
      //   { 
      //     $file = $request->file('passport_picture');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename =time().'.'.$extension;
      //     $file->move(storage_path('app/public/applications'), $filename);
      //     $applicant->passport_picture = $filename;
      //   }

      // if($request->hasfile('id_number_file')) 
      //   { 
      //     $file = $request->file('id_number_file');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename =time().'.'.$extension;
      //     $file->move(storage_path('app/public/applications'), $filename);
      //     $applicant->id_number_file = $filename;
      //   }

      // if($request->hasfile('college_file')) 
      //   { 
      //     $file = $request->file('college_file');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename =time().'.'.$extension;
      //     $file->move(storage_path('app/public/applications'), $filename);
      //     $applicant->college_file = $filename;
      //   }

      // if($request->hasfile('high_school_file')) 
      //   { 
      //     $file = $request->file('high_school_file');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename =time().'.'.$extension;
      //     $file->move(storage_path('app/public/applications'), $filename);
      //     $applicant->high_school_file = $filename;
      //   } 

     
       $path_passport_picture =$request->file('passport_picture')->Store('public/applications');
       $path_id_number_file =$request->file('id_number_file')->Store('public/applications');
       $path_high_school_file =$request->file('high_school_file')->Store('public/applications');
       $path_college_file =$request->file('college_file')->Store('public/applications');

       // $applicant->passport_picture = $path_passport_picture;
       // $applicant->id_number_file = $path_id_number_file;
       // $applicant->high_school_file = $path_high_school_file;
       // $applicant->college_file = $path_college_file;

        Applicant::create($request->all());

        Session::flash('success','thanks for contacting us, we will return to you within 24 hours');
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

    public function applicationpdf()
{
    $user = Applicant::findOrFail(11);

    return view('application.application_pdf',compact('user'));
}

    public function generatepdf()
    {
            $user = Applicant::findOrFail(11);
        
        $pdf = PDF::loadView('application.application_pdf',compact('user'));
  
        set_time_limit(300);
        return $pdf->download('applicants.pdf');
    }
}
