<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Governor;
use Faker\Generator as Faker;

$factory->define(Governor::class, function (Faker $faker) {
    return [
        //
        'title'     => $title,
    ];
});
