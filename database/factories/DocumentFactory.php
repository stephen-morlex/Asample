<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Document;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        //
        'title'     => $title,
        'file'      =>('app.pdf'),
        'image'     => $faker->imageUrl($width = 1000, $height = 398),
        'slug'      => str_slug($title),
    ];
});
