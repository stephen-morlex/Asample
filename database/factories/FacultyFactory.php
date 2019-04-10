<?php

use Faker\Generator as Faker;
use App\Program;

$factory->define(App\Faculty::class, function (Faker $faker) {

    $name = $faker->sentence;
    return [

        'name'=>$name,
        'slug'=>str_slug($name),
        'description'=>$faker->paragraph(),
        'content'=>$faker->text($maxNbChars = 200),
        'image'=>('image.jpg'),
        'file'=>('file.pdf'),

    ];
});
