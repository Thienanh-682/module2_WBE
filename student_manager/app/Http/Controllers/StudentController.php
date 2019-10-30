<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public $students;

    public function __construct(Student $student)
    {
        $this->students = $student;
        $this->middleware('auth');
    }

    public function index()
    {
        $students = $this->students->paginate(2);
        return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->students->name = $request->name;
        $this->students->phone = $request->phone;
        $this->students->address = $request->address;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $this->students->image = $path;
        }
        $this->students->save();
        return redirect()->route('student.index');
    }

    public function delete($id)
    {
        $student = $this->students->findOrFail($id);
        $student->delete();

        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $student = $this->students->findOrFail($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = $this->students->findOrFail($id);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $student->image = $path;
        }
        $student->save();
        return redirect()->route('student.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $dataSearch = DB::table("staffs")->where("name", "like", "%$search%")
            ->orwhere("phone", "like", "%$search%")
            ->orWhere('address', "like", "%$search%")->paginate(2);

        return view('search', compact('dataSearch'));
    }

}
