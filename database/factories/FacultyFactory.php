<?php

use Faker\Generator as Faker;
use App\Program;

$factory->define(App\Faculty::class, function (Faker $faker) {

    $name = $faker->sentence;
    return [

        'name' 			=> $name,
        'image' 		=> $faker->imageUrl($width = 1000, $height = 398),
        'file' 			=> ('file.pdf'),
        'description' 	=> $faker->paragraph(),
        'content' 		=> $faker->text($maxNbChars = 200),
        'slug' 			=> str_slug($name),

    ];
});
