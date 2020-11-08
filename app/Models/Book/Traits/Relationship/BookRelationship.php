<?php

namespace App\Models\Book\Traits\Relationship;
use App\Models\BookReview\BookReview;

trait BookRelationship{
    /**
     * return relatated reviews 
     */
    public function reviews(){
        return $this->hasMany(BookReview::class);
    }
}