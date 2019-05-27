<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
        //
        'title' 	=> $faker->sentence,
        'image' 	=> $faker->imageUrl($width = 1000, $height = 398),
        'description' 	=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
