<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller implements CRUDController
{
    private $categoryService;

    /**
     * CategoryController constructor.
     * @param $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function getCategory($id){
        return $this->categoryService->findCategoryById($id);
    }

    public function get($id)
    {
        return $this->categoryService->get($id);
    }

    public function getAll()
    {
        return $this->categoryService->getAll();
    }

    public function save()
    {
        $category = Input::all();
        return $this->categoryService->save($category);
    }

    public function update($id)
    {
        $category = Input::all();
        return $this->categoryService->update($id,$category);
    }

    public function delete($id)
    {
        $this->categoryService->delete($id);
    }
}
