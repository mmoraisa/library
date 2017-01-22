<?php

/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 04:42
 */

namespace App\Http\Services;

use App\Http\Repositories\AuthorRepository;

class AuthorService
{
    private $authorRepository;

    /**
     * AuthorService constructor.
     * @param $authorRepository
     */
    public function __construct(AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    public function findAuthorById($id){
        return $this->authorRepository->findById($id);
    }
}