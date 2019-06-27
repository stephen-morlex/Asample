<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Facility;
use Faker\Generator as Faker;

$factory->define(Facility::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        //
        'title'  => $title,
        'slug'   => str_slug($title),
    ];
});
