<?php


namespace App\Http\Services;


interface StudentServiceInterface
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function edit($request , $id);
    public function delete($id);
}
