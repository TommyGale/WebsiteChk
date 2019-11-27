<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        
        'topic' => $faker->sentence,
        'summary' => $faker->paragraph
    ];
});
