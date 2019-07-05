<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CurrentStudentLeader;

class CurrentStudentLeaderController extends Controller
{
    //
    public function index()
    {
    	$currentleaders = CurrentStudentLeader::all();
        return view('cueasoleaders.index',compact('currentleaders'));
    }
}
