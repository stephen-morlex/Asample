<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PastStudentLeader;

class PastStudentLeaderController extends Controller
{
    //
    public function index()
    {
    	$pastleaders = PastStudentLeader::orderBy('id','asc')->get()->groupBy('year_in_office');
    	// dd($pastleaders);
        return view('cueasoleaders.past_leaders',compact('pastleaders'));
    }
}
