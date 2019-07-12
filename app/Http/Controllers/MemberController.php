<?php

namespace App\Http\Controllers;

use App\Member;
use App\Governor;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::get();
        $governance = Governor::all();
        return view('governance.index', compact('members', 'governance'));
    }
    public function governor($slug)
    {
        $members = Governor::where('slug', $slug)->first()->members()->get();
        $governance = Governor::all();
        return view('governance.index', compact('members', 'governance'));
    }
}