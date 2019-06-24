<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        //
        'fullName'      => $faker->sentence,
        'phoneNumber' 	=> $faker->mobileNumber,
        'email' 	    => $faker->safeEmail,
        'organization' 	=> $faker->sentence,
        'natureOfTheEvent' 	=> $faker->sentence,
        'facilityRequired' 	=> $faker->sentence,
        'dateOfTheEvent' 	=> $faker->dateTime,
        'numberOfPeople' 	=> $faker->sentence,
    ];
});
