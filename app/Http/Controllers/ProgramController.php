<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;
use App\Section;
use App\About;
use App\StudentCategory;
use App\Research;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::take(4)->get();
        $programs=Program::all();
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        return view('program.index',compact('sections','programs','ad','studLife','researchNav','abouts'));
    }


    public function section()
    {
        $sections = Section::all();
        if (request()->section) {
            $programs = Program::with('section')->whereHas('section', function ($query) {
                $query->where('slug', request()->section);
            });
            $sectionName = optional($sections->where('slug', request()->section)->first())->name;
        } else {
            $programs = Program::take(12);
            $sectionName = 'sections';
        }
        $programs = $programs->paginate(6);
        $ad=Section::orderBy('name','asc')->get();
        $studLife=StudentCategory::orderBy('name','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        return view('program.section', compact('sections', 'programs', 'sectionName','ad','studLife','researchNav','abouts'));
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
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $program    = Program::where('slug', $slug)->firstOrFail();
        $ad         = Section::orderBy('name','asc')->get();
        $studLife   = StudentCategory::orderBy('name','asc')->get();
        $abouts     = About::orderBy('title','asc')->get();
        $researchNav = Research::orderBy('name','asc')->get();

        return view('program.show')->with([
            'program'   => $program,
            'ad'        => $ad,
            'studLife'  => $studLife,
            'abouts'    => $abouts,
            'researchNav' => $researchNav
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
