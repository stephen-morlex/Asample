<?php

use Faker\Generator as Faker;
use App\NewsCategory;
use App\News;

$factory->define(App\News::class, function (Faker $faker) {
	$title = $faker->sentence;
    return [
        //
        'title' 	=> $title,
        'image' 	=> $faker->imageUrl($width = 1000, $height = 398),
        'content' 	=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'slug' 		=> str_slug($title),

        'news_category_id' =>(1)
        
    ];
});
