<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faculties-schools-and-institues', 'FacultyController@index')->name('faculty.index');
Route::get('/faculties-schools-and-institues/{faculty}','FacultyController@show')->name('faculty.show');


// programs routes
Route::get('/programmes', 'ProgramController@index')->name('program.index');
Route::get('/programmes/{program}', 'ProgramController@show')->name('program.show');
Route::get('/programmes-section/{section}', 'ProgramController@section')->name('program.section');
