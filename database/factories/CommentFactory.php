<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
       
       'post_id' => function () {
           
           return factory(Post::class)->create()->id;
       },
       
       'description' => $faker->paragraph
    ];
});
