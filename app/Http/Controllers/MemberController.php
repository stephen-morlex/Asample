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
        //

          $members = Member::all();
          $governance = Governor::all();
           return view('governance.index',compact('members','governance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Governormember  $governormember
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Governormember  $governormember
     * @return \Illuminate\Http\Response
     */
    public function edit(Governormember $governormember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Governormember  $governormember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Governormember $governormember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Governormember  $governormember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Governormember $governormember)
    {
        //
    }
}
