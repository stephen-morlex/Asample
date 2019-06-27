<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $publication = Publication::where('slug', $slug)->firstOrFail();
        return view('publication.show')->with([
            'publication' => $publication,
        ]);
    }

}
