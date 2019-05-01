<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [

        'title'     => $title,
        'image'     => $faker->imageUrl($width = 1000, $height = 398),
        'start'     => $faker->time($format = 'H:i:s', $max = 'now') ,
        'end'       => $faker->time($format = 'H:i:s', $max = 'now') ,
        'date'      => $faker->date,
        'location'  => $faker->word,
        'number'    => $faker->e164PhoneNumber,
        'content'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'slug'      => str_slug($title),
    ];
});
