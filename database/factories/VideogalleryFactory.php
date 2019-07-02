<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Videogallery;
use Faker\Generator as Faker;

$factory->define(Videogallery::class, function (Faker $faker) {
    return [
        //
        'title'     => $faker->title,
        'video_url' => $faker->url,
    ];
});
