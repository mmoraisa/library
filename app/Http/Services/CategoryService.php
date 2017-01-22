<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:10
 */

namespace App\Http\Services;

use App\Http\Repositories\CategoryRepository;

class CategoryService implements CRUDService
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

    public function get($id)
    {
        return $this->categoryRepository->findById($id);
    }

    public function getAll()
    {
        return $this->categoryRepository->findAll();
    }

    public function save(array $category)
    {
        return $this->categoryRepository->save($category);
    }

    public function update($id, array $category)
    {
        return $this->categoryRepository->update($id,$category);
    }

    public function delete($id)
    {
        $this->categoryRepository->delete($id);
    }
}