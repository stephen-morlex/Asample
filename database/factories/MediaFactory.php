<?php

use Faker\Generator as Faker;

$factory->define(App\Media::class, function (Faker $faker) {
    return [
        //
        'title' 	=> $faker->sentence,
        'image' 	=> $faker->imageUrl($width = 1000, $height = 398),
        'url' 		=> $faker->sentence,
        'description' 	=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
