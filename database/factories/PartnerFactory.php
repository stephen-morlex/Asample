<?php

use Faker\Generator as Faker;

$factory->define(App\Partner::class, function (Faker $faker) {
    return [
        //
        'name' 	=> $faker->sentence,
        'url' 	=> $faker->sentence,
        'image' => $faker->imageUrl($width = 1000, $height = 398)
    ];
});
