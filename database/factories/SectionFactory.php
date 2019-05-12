<?php

use Faker\Generator as Faker;

$factory->define(App\Section::class, function (Faker $faker) {

    $name = $faker->sentence;
    return [

        'name'        =>$name,
        'image'       =>('image.jpg'),
        'requirement' =>$faker->paragraph,
        'process' =>$faker->paragraph,
        'application' =>('app.pdf'),
        'brochure'    =>('borchure.pdf'),
        'fees'        =>$faker->paragraph,
        'slug'        =>str_slug($name),
    ];
});
