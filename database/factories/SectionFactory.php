<?php

use Faker\Generator as Faker;

$factory->define(App\Section::class, function (Faker $faker) {
    $name = $faker->sentence;
    return [

        'name'=>$name,
        'image'=>('image.jpg'),
        'slug'=>str_slug($name),
    ];
});
