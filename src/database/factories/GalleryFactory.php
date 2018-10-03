<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
*/

$factory->define(\Vilbur\Gallery\Models\Gallery::class, function (Faker $faker) {
    return [
		'title'	=> $faker->text(24),
		'image'	=> $faker->imageUrl(1280, 768),
		'summary'	=> $faker->sentence(6, true),
		'description'	=> $faker->text(128),
		
    ];
});
