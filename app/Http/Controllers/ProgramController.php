<?php

namespace App\Http\Controllers;

use App\Program;
use App\Section;


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
        $programs=Program::orderBy('section_id','asc')->get()->groupBy('section_id');
        return view('program.index',compact('sections','programs'));
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
            $programs = Program::orderBy('section_id','asc')->get();;
            $sectionName = 'sections';
        }
        $programs =$programs->paginate(6);
        return view('program.section',compact('sections','sectionName','programs'));
    }
    public function show($slug)
    {

        $program    = Program::where('slug', $slug)->firstOrFail();
        return view('program.show')->with([
            'program'   => $program,

        ]);
    }
}
