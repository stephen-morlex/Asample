<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Publication;
use Faker\Generator as Faker;

$factory->define(Publication::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        //
        'title'    =>$title,
        'content'  =>$faker->paragraph,
        'slug'     =>str_slug($title),
    ];
});
