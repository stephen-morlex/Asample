<?php

namespace App\Http\Controllers;

use App\Dean;
use Illuminate\Http\Request;

class DeanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deans=Dean::get();
        return view('dean.index',compact('deans'));

    }
        /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $dean = Dean::where('slug', $slug)->firstOrFail();
        return view('dean.show')->with([
            'dean' => $dean,
        ]);
    }
}
