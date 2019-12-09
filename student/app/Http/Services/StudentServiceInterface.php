<?php


namespace App\Http\Services;


interface StudentServiceInterface
{
    function getAll();
    function findById($id);
}
