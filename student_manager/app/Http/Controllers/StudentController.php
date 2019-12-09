<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Requests\StudentRequest;
use App\Http\Services\StudentServiceInterface;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public $studentService;

    public function __construct(StudentServiceInterface $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        try {
            $students = $this->studentService->getAll();

        } catch (\Exception $e) {
          return response()->json([
             'status' => 'error',
             'message' => $e->getMessage()
          ]);
        };
        return response()->json([
            'status' => "success",
            'data' => $students
        ]);
    }

    public function create()
    {
        return view('create');
    }


    public function store(StudentRequest $request)
    {
        try{
            $this->studentService->create($request);

        } catch (\Exception $e) {
            return response()->json([
               'status' => 'error',
               'message' => $e->getMessage()
            ]);
        }
        return response()->json([
           'status' => 'success',
           'message'  => 'Tạo mới thành công '
        ]);

    }

    public function getById($id)
    {
        $student = $this->studentService->findById($id);
        return response()->json($student);
    }

    public function delete($id)
    {
        try {
            $student = $this->studentService->delete($id);
        }catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
           'status' => 'success',
           'message' => 'Đã xóa thành công'
        ]);
    }

    public function edit($id)
    {
        $student = $this->studentService->findById($id);
        return response()->json($student);
    }

    public function update(StudentRequest $request, $id)
    {
        try{
            $this->studentService->edit($request, $id);
        }catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'data' => $e->getMessage()
            ]);
        }
        return response()->json([
           'status' => 'success',
           'message' => 'Cập nhật thành công'
        ]);
    }

    public function search(SearchRequest $request)
    {
        $search = $request->get('search');
        $dataSearch = DB::table("staffs")->where("name", "like", "%$search%")
            ->orwhere("phone", "like", "%$search%")
            ->orWhere('address', "like", "%$search%")->paginate(2);

        return view('search', compact('dataSearch'));
    }

}
