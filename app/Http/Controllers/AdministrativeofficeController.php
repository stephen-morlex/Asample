<?php

namespace App\Http\Controllers;

use App\Administrativeoffice;
use Illuminate\Http\Request;

class AdministrativeofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $administrative_offices = Administrativeoffice::all();
        $administratives = Administrativeoffice::take(1)->get();
        return view('administrativeoffice.index', compact('administrative_offices', 'administratives'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrativeoffice  $administrativeoffice
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $administrative_office  = Administrativeoffice::where('slug', $slug)->firstOrFail();
        $administrative_offices   = Administrativeoffice::orderBy('title')->get();
        return view('administrativeoffice.show')->with([
            'administrative_office'     => $administrative_office,
            'administrative_offices'   => $administrative_offices
        ]);
    }   
}
