<?php


namespace App\Http\Repositories\eloquent;


use App\Http\Repositories\StudentRepositoryInterface;
use App\Student;

class StudentEloquentRepository implements StudentRepositoryInterface
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    function index()
    {
        return $this->student->paginate(2);
    }

    function store($obj)
    {
        return $obj->save();
    }

    function findById($id)
    {
        return $this->student->findOrFail($id);
    }

    function update($obj)
    {
        return $obj->save();
    }

    function destroy($obj)
    {
        return $obj->delete();
    }
}
