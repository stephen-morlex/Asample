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
        Mail::send('contact.mail',
                array(
                    'fullName' => $request->get('fullName'),
                    'email' => $request->get('email'),
                    'phoneNumber' => $request->get('phoneNumber'),
                    'user_message' => $request->get('message'),
                    'subject' => $request->get('subject')
                ), function($message)
            {
            $message->from('stephenvicson@gmail.com');
            $message->to('stephenvicson@gmail.com', 'Admin')->subject('Contact information from your website');
             });
        Session::flash('success','thanks for contacting us, we will return to you within the 24 hours of the work');
        return redirect()->back();

    }
}
