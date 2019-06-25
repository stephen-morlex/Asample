<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Chaplaincy;
use App\The_chaplain;

class ChaplainController extends Controller
{
      public function index()
    {
           $side_bar  = Chaplaincy::get();
           
            $chaplain = The_chaplain::all();
      
           return view('chaplaincy.index',compact('chaplain','side_bar'));
       }

    //     /**
    //  * Display the specified resource.
    //  *
    //  * @param  string  $slug
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($slug)
    {
        $chaplaincy  = Chaplaincy::where('slug', $slug)->firstOrFail();
         
         
        $chaplaincies = Chaplaincy::all();
        return view('chaplaincy.show')->with([
            'chaplaincy'   => $chaplaincy,
            'chaplaincies' => $chaplaincies,

        ]);
    }
}