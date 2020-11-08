<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BookReview\BookReview;
use Faker\Generator as Faker;

$factory->define(BookReview::class, function (Faker $faker) {
    $one_time_review = $faker->unique()->numberBetween(1, 10);
    
    return [
        'book_id' => $one_time_review,
        'user_id' => $one_time_review,
        'message' => $faker->paragraph,
        'rating' => rand(1,5)
    ];
});
