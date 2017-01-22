<?php

/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 04:40
 */

namespace App\Http\Repositories;

class AuthorRepository
{
    public function findById($id){
        return \App\Author::all()->where('id','=',$id);
    }
}