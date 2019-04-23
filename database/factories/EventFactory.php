<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [

        'title'=>$title,
        'slug'=>str_slug($title),
        'content'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'image'=>$faker->imageUrl($width = 1000, $height = 398),
        'start'=>$faker->time($format = 'H:i:s', $max = 'now') ,
        'end'=>$faker->time($format = 'H:i:s', $max = 'now') ,
        'date'=>$faker->date,
        'location'=>$faker->word,
        'number'=>$faker->e164PhoneNumber,
    ];
});
