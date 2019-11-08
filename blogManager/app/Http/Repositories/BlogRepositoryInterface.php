<?php


namespace App\Http\Repositories;


interface BlogRepositoryInterface
{
 function index();
 function findById($id);
 function store($obj);
 function destroy($obj);
 function update($obj);
 function search($keyWord);
}
