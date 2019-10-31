<?php


namespace App\Http\Repositories;


interface StudentRepositoryInterface
{
    function index();
    function findById($id);
    function store($obj);
    function update($obj);
    function destroy($obj);
}
