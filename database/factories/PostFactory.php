<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker -> words(2, true),
        'text' => $faker -> text(),
        'name_author' => $faker -> name(),
    ];
});
