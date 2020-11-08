<?php

namespace App\Http\Controllers\Api\v1\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Book\BookRepository;
use App\Http\Resources\BookResource;
use App\Http\Resources\BookDetailResource;

class BookController extends Controller
{
    /**
     * @var BookRepository
     */
    protected $bookRepo;

    /**
     * UserController constructor.
     *
     * @param BookRepository $bookRepo
     */
    public function __construct(BookRepository $bookRepo)
    {
        $this->bookRepo = $bookRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookResource::collection($this->bookRepo->get());
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return BookDetailResource::make($this->bookRepo->show($id));
    }

}
