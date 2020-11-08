<?php

namespace App\Http\Controllers\Api\v1\BookReview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BookReviewResource;
use App\Repositories\BookReview\BookReviewRepository;
use App\Http\Requests\BookReview\StoreBookReviewRequest;

class BookReviewController extends Controller
{
    /**
     * @var BookReviewRepository
     */
    protected $bookReviewRepo;

    /**
     * UserController constructor.
     *
     * @param BookReviewRepository $bookReviewRepo
     */
    public function __construct(BookReviewRepository $bookReviewRepo)
    {
        $this->bookReviewRepo = $bookReviewRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookReviewResource::collection($this->bookReviewRepo->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookReviewRequest $request)
    {   
        $review = $this->bookReviewRepo->create($request->all());

        return BookReviewResource::make($review)->additional(['message' => 'You successfully reviewed !.']);
    }   

}
