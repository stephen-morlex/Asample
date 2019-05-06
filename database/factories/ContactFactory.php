<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        //
        'fullName' => $faker->sentence,
        'phoneNumber' 	=> $faker->sentence,
        'email' 	=> $faker->safeEmail,
        'subject' 	=> $faker->sentence,
        'message' 	=> $faker->paragraph(500)
    ];
});
