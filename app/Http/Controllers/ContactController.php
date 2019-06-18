<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

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
        return view('contact.index');
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

        Session::flash('success','thanks for contacting us, we will return to you within 24 hours');
        return redirect()->back();

    }
}
