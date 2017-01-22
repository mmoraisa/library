<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 04:40
 */

namespace App\Http\Repositories;

use App\Author;

class AuthorRepository implements CRUDRepository
{
    public function findById($id){
        return Author::find($id);
    }

    public function findAll(){
        return Author::all();
    }

    public function save(array $author){
        return Author::create($author);
    }

    public function update($id, array $data)
    {
        $author = $this->findById($id);
        $author->fill($data);
        $author->save();
        return $author;
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }
}