<?php

namespace App\Http\Controllers;

use App\Section;
use App\Program;
use App\StudentCategory;
use App\Contact;
// use Illuminate\Support\Facades\Mail
use Illuminate\Http\Request;

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

        return view('contact.index', compact('sections', 'programs', 'ad', 'studLife'));
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
            'firstName' => 'required|max:50|min:2',
            'lastName'  => 'required|max:50|min:2',
            'email'     => 'required|email|max: 255',
            'subject'   => 'required|max:100|min:2',
            'message'   => 'required|min:5',
        ]);

        Contact::create($request->all());

        // Mail::send('newUser', function($message){
        //     $message->from('testmail@gg.lv');
        //     $message->subject('welcome');
        //     $message->to('admin@admin.com');
        // });

        return redirect(route('contact.index'));

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
