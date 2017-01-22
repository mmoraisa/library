<?php
/**
 * Created by PhpStorm.
 * User: mmorais
 * Date: 22/01/17
 * Time: 06:12
 */

namespace App\Http\Controllers;


interface CRUDController
{
    public function get($id);
    public function getAll();
    public function save();
    public function update($id);
    public function delete($id);
}