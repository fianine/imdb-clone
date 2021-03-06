<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence,
      'img_movie' => $faker->sentence,
      'year' => $faker->sentence,
      'synopsis' => $faker->paragraph
    ];
});
