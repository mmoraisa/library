<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Services\AuthorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AuthorController extends Controller implements CRUDController
{
    private $authorService;

    /**
     * AuthorController constructor.
     * @param AuthorService $authorService
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function get($id)
    {
        return $this->authorService->get($id);
    }

    public function getAll()
    {
        return $this->authorService->getAll();
    }

    public function save()
    {
        $author = Input::all();
        return $this->authorService->save($author);
    }

    public function update($id)
    {
        $author = Input::all();
        return $this->authorService->update($id,$author);
    }

    public function delete($id)
    {
        $this->authorService->delete($id);
    }
}
