<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Governormember;
use Faker\Generator as Faker;

$factory->define(Governormember::class, function (Faker $faker) {
	$firstname = $faker->sentence;
    return [
        //
        'firstname' => $firstname,
        'lastname'  => $lastname,
        'position'  => $position,
        'image'     => $faker->imageUrl($width = 1000, $height = 398),
        'slug'      => str_slug($firstname),
    ];
});
