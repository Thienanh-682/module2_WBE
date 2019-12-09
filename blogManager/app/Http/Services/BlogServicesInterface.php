<?php


namespace App\Http\Services;


interface BlogServicesInterface
{
public function getAll();
public function findById($id);
public function create($request);
//public function delete($id);
public function edit($request,$id);
}
