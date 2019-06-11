<?php

namespace App\Http\Controllers;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event::latest()->paginate(6);
        return view('event.index',compact('events'));
    }

   /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('event.show')->with([
            'event' => $event]);
    }
}
