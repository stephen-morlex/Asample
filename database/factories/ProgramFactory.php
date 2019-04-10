<?php

use Faker\Generator as Faker;
use App\Section;
use App\Faculty;

$factory->define(App\Program::class, function (Faker $faker) {

    $name = $faker->sentence;
    return [

        'name'=>$name,
        'slug'=>str_slug($name),
        'body'=>$faker->text,
        'section_id' =>function(){

            return Section::all()->random();
        },
        'faculty_id' =>function(){

            return Faculty::all()->random();
        },

    ];
});
