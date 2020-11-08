<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book\Traits\Relationship\BookRelationship;
use App\Models\Book\Traits\Method\BookMethod;

class Book extends Model
{
    use BookRelationship,BookMethod;
}
