<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'date_written' => now(),
        'post_id' => $faker->numberBetween(1,500),
        'user_id' => $faker->numberBetween(1,50)
    ];
});
