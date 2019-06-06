<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Section;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['*'], function ($view) {
            $ad = Section::orderBy('name','asc')->get();
            $view->with('ad',$ad);
        });
    }
}
