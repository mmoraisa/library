<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthorService;
use Illuminate\Http\Request;

class AuthorController extends Controller
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

    public function getUser($id){
        return $this->authorService->findAuthorById($id);
    }
}
