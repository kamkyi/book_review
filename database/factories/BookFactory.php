<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'user_id'   => rand(1,10),
        'title'     => $faker->sentence,
        'author'    => $faker->name
    ];
});
