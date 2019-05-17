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
                    $ad=Section::orderBy('name','asc')->get();
                    $studLife=StudentCategory::orderBy('name','asc')->get();
                    $researchNav = Research::orderBy('name','asc')->get();
                    $sideResearch=Research::orderBy('name','asc')->get();
                    $abouts     = About::orderBy('title','asc')->get();
                    return view('search.index',compact('searchterm','searchResults','ad','studLife','researchNav','sideResearch','research','abouts'));


    }

}
