<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->realText(),
        'user_id' => 1
    ];
});
