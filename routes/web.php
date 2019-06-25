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
Route::get('/academics/faculties-schools-and-institues', 'FacultyController@index')->name('faculty.index');
Route::get('/faculties-schools-and-institues/{faculty}','FacultyController@show')->name('faculty.show');


// programs routes
Route::get('/academics/programmes', 'ProgramController@index')->name('program.index');
Route::get('/academics/programmes/{program}', 'ProgramController@show')->name('program.show');
Route::get('/academics/programmes-section/{section}', 'ProgramController@section')->name('program.section');



// admission routes
Route::get('/cuea-admission', 'AdmissionController@index')->name('admission.index');
Route::get('/cuea-admission/{section}', 'AdmissionController@show')->name('admission.show');


// student life route

Route::get('/student-experience', 'StudentController@index')->name('student.index');
Route::get('/student-experience/{student}', 'StudentController@show')->name('student.show');
Route::get('/student/{studentCategory}', 'StudentController@studentCats')->name('student.cat');

// events routes

Route::get('/events', 'EventController@index')->name('events.index');
Route::get('/event/{event}', 'EventController@show')->name('event.show');

// Research routes


Route::get('/research','ResearchController@index')->name('research.index');
Route::get('/research/{research}','ResearchController@show')->name('research.show');

// Students service information



Route::get('/academics/students-service-information','ServicesController@index')->name('services.index');
Route::get('/students-service-information/{services}','ServicesController@show')->name('services.show');





// ABOUT CUEA
Route::get('/about-cuea', 'AboutController@index')->name('about.index');
Route::get('/about-cuea/{about}', 'AboutController@show')->name('about.show');



// CONTACT US
Route::get('/contact/', 'ContactController@index')->name('contact.index');
Route::post('/contact/send', 'ContactController@store')->name('contact.store');


// APPLICATION FORM 
Route::get('/application/', 'ApplicationController@index')->name('application.index');
Route::post('/application/send', 'ApplicationController@store')->name('application.store');

//Generate Pdf
Route::get('/applicationpp/', 'ApplicationController@applicationpdf')->name('application.application_pdf');
Route::get('/generate-pdf','ApplicationController@generatepdf');


// GALLERY
Route::get('/gallery/', 'GalleryController@index')->name('gallery.index');

// NEWS
Route::get('/news/', 'NewsController@index')->name('news.index');
Route::get('/news/{news}', 'NewsController@show')->name('news.show');
Route::get('/news/category/{newscategory}', 'NewsController@newsCategory')->name('news.category');

// Search
Route::get('/search', 'SearchController@search')->name('search.result');

Route::group(['prefix' => 'cuea'], function () {
    Voyager::routes();
});

// PARENT
Route::get('/parent', 'AboutParentController@index')->name('parent.index');
Route::get('/parent/{parent}', 'AboutParentController@show')->name('parent.show');

// DOCUMENT
Route::get('/documents', 'DocumentController@index')->name('document.index');

// RESEARCH AND PUBLICATIONS
Route::get('/research-and-publication/{publication}', 'PublicationController@show')->name('publication.show');

// ADMINISTRATIVE OFFICESS
Route::get('/administrative-offices', 'AdministrativeofficeController@index')->name('administrativeoffice.index');
Route::get('/administrative-office/{administrativeoffice}', 'AdministrativeofficeController@show')->name('administrativeoffice.show');

// ADMINISTRATIVE OFFICESS
Route::get('/community-sercive', 'CommunityserciveController@index')->name('communitysercive.index');
Route::get('/community-sercive/{communitysercive}', 'CommunityserciveController@show')->name('communitysercive.show');

// BOOKING
Route::get('/booking', 'BookingController@index')->name('booking.index');
Route::post('/booking/send', 'BookingController@store')->name('booking.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
