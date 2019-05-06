<?php

namespace App\Http\Controllers;

use App\Section;
use App\Program;
use App\About;
use App\StudentCategory;
use App\Contact;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Validator\validatePhone;
use Illuminate\Http\Request;
use App\Research;
use Mail;




class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sections   = Section::take(4)->get();
        $programs   = Program::all();
        $ad         = Section::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();

        return view('contact.index', compact('sections', 'programs', 'ad', 'studLife','researchNav','abouts'));
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
            'fullName'      => 'required|max:50|min:2',
            'phoneNumber'   => 'required|numeric',
            'email'         => 'required|email',
            'subject'       => 'required|max:100|min:2',
            'message'       => 'required|min:5',
        ]);

        Contact::create($request->all());

        Session::flash('success','thanks for contacting us!');
        return redirect()->back();

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
