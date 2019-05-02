<?php

use Faker\Generator as Faker;
use App\Section;

$factory->define(App\Admission::class, function (Faker $faker) {

    return [

        'section_id' =>function(){

            return Section::all()->random();
        },

    ];
});
