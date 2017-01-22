<?php

namespace App\Http\Controllers;

use App\Http\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $bookService;

    /**
     * BookController constructor.
     * @param $bookService
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function getBook($id){
        return $this->bookService->findBookById($id);
    }
}
