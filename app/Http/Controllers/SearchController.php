<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Program;
use App\Faculty;
use App\Section;
use App\StudentCategory;
use App\Research;
use App\About;
use App\Services;

class SearchController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.index');
    }

    /**
     * search records in database and display  results
     * @param  Request $request [description]
     * @return view      [description]
     */
    public function search( Request $request)
    {

        $searchterm = $request->input('query');

        $searchResults = (new Search())
                    ->registerModel(Program::class, 'name')
                    ->registerModel(Faculty::class, 'name')
                    ->perform($request->input('query'));
                    return view('search.index',compact('searchterm','searchResults'));


    }

}
