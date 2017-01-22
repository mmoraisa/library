<?php

/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 04:40
 */

namespace App\Http\Repositories;

use \App\Author;

class AuthorRepository
{
    public function findById($id){
        return Author::find($id);
    }
}