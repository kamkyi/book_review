<?php

namespace App\Repositories\BookReview;

use App\Exceptions\GeneralException;
use Illuminate\Support\Facades\DB;
use App\Models\BookReview\BookReview;
use App\Repositories\BaseRepository;

/**
 * Class BookReviewRepository.
 */
class BookReviewRepository extends BaseRepository
{
    /**
     * BookReviewRepository constructor.
     *
     * @param  BookReview  $bookReview
     */
    public function __construct(BookReview $bookReview)
    {
        $this->model = $bookReview;
    }

    /**
     * @param  Array
     */
    public function create(Array $data){

        if(BookReview::where('user_id',$data['user_id'])
                        ->where('book_id',$data['book_id'])
                        ->first()){
            throw new GeneralException('You can rate a book only one time !');
        }

        return DB::transaction(function () use ($data) {
            
            if($review = BookReview::create([
                'user_id' => $data['user_id'],
                'book_id' => $data['book_id'],
                'rating' => $data['rating'],
                'message' => $data['message']
            ])){
                return $review;
            }

            throw new GeneralException('Successfully Reviewed !');
        });
    }

}
