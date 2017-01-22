<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:10
 */

namespace App\Http\Repositories;

use App\Category;

class CategoryRepository
{
    public function findById($id){
        return Category::find($id);
    }
}