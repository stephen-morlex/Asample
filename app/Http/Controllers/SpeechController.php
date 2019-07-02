<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Speech;
class SpeechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speeches =Speech::orderBy('title','asc')->get()->groupBy('year');
        return view('gallery.speech', compact('speeches'));
    }
}
