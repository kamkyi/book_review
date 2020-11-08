<?php

namespace App\Models\Book\Traits\Method;

trait BookMethod{
    /**
     * calculate average rating here
     */
    public function averageRatings($reviews){

        $total_ratings = 0;
        $total_reviews = 0;

        if(isset($review->message)){
            $total_reviews +=1;
        }

        foreach($reviews as $review){
            $total_ratings += $review->rating;
        }

        if($total_reviews > 0 ){
            $average_ratings = $total_ratings/$total_reviews;
        }else{
            $average_ratings = $total_ratings;
        }

        // ** return average ratings
        return $average_ratings;
    }
}