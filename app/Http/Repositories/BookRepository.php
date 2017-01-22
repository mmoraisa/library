<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:19
 */

namespace App\Http\Repositories;

use App\Book;

class BookRepository implements CRUDRepository
{
    public function findById($id){
        return Book::find($id);
    }

    public function findAll(){
        return Book::all();
    }

    public function save(array $book){
        return Book::create($book);
    }

    public function update($id, array $data)
    {
        $book = $this->findById($id);
        $book->fill($data);
        $book->save();
        return $book;
    }

    public function delete($id)
    {
        $this->findById($id)->delete();
    }
}