<?php

/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:19
 */

namespace App\Http\Repositories;

use App\Book;

class BookRepository
{
    public function findById($id){
        return Book::find($id);
    }
}