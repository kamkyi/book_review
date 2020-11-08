<?php

use Illuminate\Database\Seeder;

use App\Models\BookReview\BookReview;
class BookReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BookReview::class,3)->create();
    }
}
