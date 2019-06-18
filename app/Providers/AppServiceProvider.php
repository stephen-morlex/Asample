<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Section;
use Illuminate\View\View;
use App\About;
use App\Research;
use App\StudentCategory;
use App\Services;
use App\Event;
use App\News;
use App\NewsCategory;
use App\Student;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $admissions = Section::orderBy('name')->get();
            $ad = Section::orderBy('name','asc')->get();
            $abouts     = About::orderBy('id','asc')->get();
            $researchNav = Research::orderBy('name','asc')->get();
            $studLife   = StudentCategory::orderBy('name','asc')->get();
            $events  = Event::latest()->take(5)->get();
            $academicCalender=Services::where('id','3')->get();
            $feeStructure=Services::where('id','8')->get();
            $services1=   Services::orderBY('name','asc')->take(6)->get();
            $services2=   Services::orderBY('name','asc')->skip(6)->take(10)->get();
            $newsCategories = NewsCategory::latest()->get();
            $newsSide =News::orderBy('view_count','desc')->take(5)->get();
            $latestEvents= Event::latest()->take(5)->get();
            $sideResearch=Research::orderBy('name','asc')->get();
            $sideServices=Services::orderBy('name','asc')->get();
            $studentSide= Student::skip(0)->take(50)->get();
            $view->with('admissions',$admissions);
            $view->with('ad',$ad);
            $view->with('researchNav',$researchNav);
            $view->with('abouts',$abouts);
            $view->with('studLife',$studLife);
            $view->with('events',$events);
            $view->with('services1',$services1);
            $view->with('services2',$services2);
            $view->with('academicCalender',$academicCalender);
            $view->with('feeStructure',$feeStructure);
            $view->with('newsSide',$newsSide);
            $view->with('newsCategories',$newsCategories);
            $view->with('latestEvents',$latestEvents);
            $view->with('sideResearch',$sideResearch);
            $view->with('sideServices',$sideServices);
            $view->with('studentSide',$studentSide);






        });
    }
}
