<?php

namespace App\Models\BookReview;

use Illuminate\Database\Eloquent\Model;

class BookReview extends Model
{
    /**
     * enable mass assignmement
     */
    protected $fillable = [
        'book_id',
        'user_id',
        'rating',
        'message'
    ];
}
