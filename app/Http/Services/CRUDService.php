<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 06:00
 */

namespace App\Http\Services;


interface CRUDService
{
    public function get($id);
    public function getAll();
    public function save(array $array);
    public function update($id,array $array);
    public function delete($id);
}