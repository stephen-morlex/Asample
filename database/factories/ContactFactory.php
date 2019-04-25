<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        //
        'firstName' => $faker->sentence,
        'lastName' 	=> $faker->sentence,
        'email' 	=> $faker->safeEmail,
        'subject' 	=> $faker->sentence,
        'message' 	=> $faker->paragraph(500)
    ];
});
