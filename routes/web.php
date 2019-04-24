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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faculties-schools-and-institues', 'FacultyController@index')->name('faculty.index');
Route::get('/faculties-schools-and-institues/{faculty}','FacultyController@show')->name('faculty.show');


// programs routes
Route::get('/programmes', 'ProgramController@index')->name('program.index');
Route::get('/programmes/{program}', 'ProgramController@show')->name('program.show');
Route::get('/programmes-section/{section}', 'ProgramController@section')->name('program.section');


// admission routes

Route::get('/cuea-admission', 'AdmissionController@index')->name('admission.index');
Route::get('/cuea-admission/{section}', 'AdmissionController@show')->name('admission.show');


// student life route

Route::get('/student-experience', 'StudentController@index')->name('student.index');
Route::get('/student-experience/{student}', 'StudentController@show')->name('student.show');

// events routes

Route::get('/events', 'EventController@index')->name('events.index');
Route::get('/event/{event}', 'EventController@show')->name('event.show');


Route::group(['prefix' => 'cuea'], function () {
    Voyager::routes();
});
