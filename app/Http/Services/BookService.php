<?php

/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:20
 */

namespace App\Http\Services;

use App\Http\Repositories\BookRepository;

class BookService
{
    private $bookRepository;

    /**
     * BookService constructor.
     * @param $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function findBookById($id){
        return $this->bookRepository->findById($id);
    }
}