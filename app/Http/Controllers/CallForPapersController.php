<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CallForPaper;
class CallForPapersController extends Controller
{
    //
    public function index()
    {

       $allpapers = CallForPaper::all();
    	$papers      = CallForPaper::first()->take(1)->get();
        return view('callforpapers.index', compact('papers','allpapers'));
    }

    public function show($slug)
    {
        $papers  = CallForPaper::where('slug', $slug)->firstOrFail();
        $allpapers   = CallForPaper::orderBy('title')->get();
    	return view('callforpapers.show')->with([
            'paper'     => $papers,
            'allpapers'   => $allpapers
        ]);
    }
}
