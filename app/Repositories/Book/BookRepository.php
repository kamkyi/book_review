<?php

namespace App\Repositories\Book;

use App\Exceptions\GeneralException;
use Illuminate\Support\Facades\DB;
use App\Models\Book\Book;
use App\Repositories\BaseRepository;

/**
 * Class BookRepository.
 */
class BookRepository extends BaseRepository
{
    /**
     * BookRepository constructor.
     *
     * @param  Book  $book
     */
    public function __construct(Book $book)
    {
        $this->model = $book;
    }

    /**
     * 
     */
    public function show($id)
    {
        return $this->model
                    ->find($id);
    }

}
