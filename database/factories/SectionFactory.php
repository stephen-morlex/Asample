<?php

use Faker\Generator as Faker;

$factory->define(App\Section::class, function (Faker $faker) {

    $name = $faker->sentence;
    return [

        'name'=>$name,
        'slug'=>str_slug($name),
        'image'=>('image.jpg'),
        'requirement'=>$faker->paragraph,
        'application'=>('app.pdf'),
        'brochure'=>('borchure.pdf'),
        'fees'=>$faker->paragraph,
    ];
});
