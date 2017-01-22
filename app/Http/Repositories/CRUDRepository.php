<?php

/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 05:54
 */

namespace App\Http\Repositories;


interface CRUDRepository
{
    public function findById($id);
    public function findAll();
    public function save(array $array);
    public function update($id,array $array);
    public function delete($id);
}