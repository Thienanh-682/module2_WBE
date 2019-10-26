<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('listStudent',compact('student'));
    }
    public function  create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;

        $student->save();
        return redirect()->route('index');
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('index');
    }

    public function update($id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    public function edit(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('index');
    }
}
