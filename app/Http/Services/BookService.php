<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:20
 */

namespace App\Http\Services;

use App\Http\Repositories\BookRepository;

class BookService implements CRUDService
{
    private $bookRepository;

    /**
     * BookService constructor.
     * @param $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function get($id)
    {
        return $this->bookRepository->findById($id);
    }

    public function getAll()
    {
        return $this->bookRepository->findAll();
    }

    public function save(array $book)
    {
        return $this->bookRepository->save($book);
    }

    public function update($id,array $book)
    {
        return $this->bookRepository->update($id,$book);
    }

    public function delete($id)
    {
        $this->bookRepository->delete($id);
    }
}