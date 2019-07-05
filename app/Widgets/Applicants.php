<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
class Applicants extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Applicant::count();
        $string = 'New applications';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-new',
            'title'  => "{$count} {$string}",
            'text'   => __('You have new applications record in the database click the button to view ', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View the Applications',
                'link' => route('voyager.applicants.index'),
            ],
            'image' => '/images/apply-bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', Voyager::model('User'));
    }
}
