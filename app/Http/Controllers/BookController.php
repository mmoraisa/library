<?php

namespace App\Http\Controllers;

use App\Http\Services\BookService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BookController extends Controller implements CRUDController
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

    public function get($id)
    {
        return $this->bookService->get($id);
    }

    public function getAll()
    {
        return $this->bookService->getAll();
    }

    public function save()
    {
        $book = Input::all();
        return $this->bookService->save($book);
    }

    public function update($id)
    {
        $book = Input::all();
        return $this->bookService->update($id,$book);
    }

    public function delete($id)
    {
        $this->bookService->delete($id);
    }
}
