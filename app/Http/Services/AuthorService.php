<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 04:42
 */

namespace App\Http\Services;

use App\Http\Repositories\AuthorRepository;

class AuthorService implements CRUDService
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

    public function get($id)
    {
        return $this->authorRepository->findById($id);
    }

    public function getAll()
    {
        return $this->authorRepository->findAll();
    }

    public function save(array $author)
    {
        return $this->authorRepository->save($author);
    }

    public function update($id, array $author)
    {
        return $this->authorRepository->update($id,$author);
    }

    public function delete($id)
    {
        $this->authorRepository->delete($id);
    }
}