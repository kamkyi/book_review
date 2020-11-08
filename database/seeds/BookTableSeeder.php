<?php

use Illuminate\Database\Seeder;
use App\Models\Book\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class,20)->create();
    }
}
