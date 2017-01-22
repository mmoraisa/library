<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:10
 */

namespace App\Http\Repositories;

use App\Category;

class CategoryRepository implements CRUDRepository
{
    public function findById($id){
        return Category::find($id);
    }

    public function findAll(){
        return Category::all();
    }

    public function save(array $category){
        return Category::create($category);
    }

    public function update($id, array $data)
    {
        $category = $this->findById($id);
        $category->fill($data);
        $category->save();
        return $category;
    }

    public function delete($id)
    {
        $this->findById($id)->delete();
    }
}