<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Services::inRandomOrder()->get();
        return view('services.index',compact('services'));

    }
        /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $service = Services::where('slug', $slug)->firstOrFail();
        return view('services.show')->with([
            'service' => $service,
        ]);
    }
}
