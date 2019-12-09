<?php


namespace App\Http\Repositories;


interface StudentRepositoryInterface
{
    public function index();
    public function findById($id);
}
