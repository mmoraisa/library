<?php

/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:10
 */

namespace App\Http\Services;

use App\Category;
use App\Http\Repositories\CategoryRepository;

class CategoryService
{
    private $categoryRepository;

    /**
     * CategoryService constructor.
     * @param $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Find a Category by Id
     * @param $id category id
     * @return Category
     */
    public function findCategoryById($id){
        return $this->categoryRepository->findById($id);
    }

}