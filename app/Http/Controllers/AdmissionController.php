<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Section;
use App\Services;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections=Section::with('admission')->get();

        $financial= Services::where('id',10)->get();
        $internationlStudent= Services::where('id',10)->get();
        $internationlStudent= Services::where('id',9)->get();
        return view('admission.index',compact('sections','financial','internationlStudent'));

    }
     /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $admission = Section::with('admission')->where('slug', $slug)->firstOrFail();
        $financial= Services::where('id',10)->get();
        $admissionServices=Services::inRandomOrder()->limit(4)->get();

        return view('admission.show')->with([
            'admission' => $admission,
             'financial'=>$financial,
             'admissionServices' =>$admissionServices
        ]);
    }

}
