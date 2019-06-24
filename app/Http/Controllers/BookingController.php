<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facilities = Facility::all();
        return view('booking.index', compact('facilities'));
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
            'full_name'     => 'required|string|max:100|min:2',
            'phone_number'  => 'required|numeric|digits_between:10,13',
            'email'         => 'required|email|max:100',
            'organization'  => 'required|string|max:100|min:2',
            'nature_of_the_event'  => 'required|string|max:100|min:2',
            'date_of_the_event'    => 'required|date|after:today',
            'number_of_people'     => 'required|numeric|min:1',
            'facility_required'    => 'required',
        ]);

        $facilities = implode(", ", $request->get('facility_required'));
        Booking::create([
            'fullName'      => $request['full_name'],
            'phoneNumber'   => $request['phone_number'],
            'email'         => $request['email'],
            'organization'      => $request['organization'],
            'natureOfTheEvent'  => $request['nature_of_the_event'],
            'facilityRequired'  => $facilities,
            'dateOfTheEvent'    => $request['date_of_the_event'],
            'numberOfPeople'    => $request['number_of_people'],

        ]);
        Session::flash('success','thanks for booking with us, we will return to you as soon as possible.');
        return redirect()->back();
    }

}
