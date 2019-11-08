<?php

namespace App\Http\Controllers;

use App\Http\Services\BlogServicesInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blogService;

    public function __construct(BlogServicesInterface $blogService)
    {
        $this->blogService = $blogService;
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = $this->blogService->getAll();
        return view('index',compact('blogs'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->blogService->create($request);
        return redirect()->route('blog.index');
    }
    public function delete($id)
    {
        $this->blogService->delete($id);
        return redirect()->route('blog.index');
    }
    public function edit($id)
    {
        $blog = $this->blogService->findById($id);
        return view('edit',compact('blog'));
    }
    public function update(Request $request,$id)
    {
        $this->blogService->edit($request,$id);
        return redirect()->route('blog.index');
    }
    public function search(Request $request)
    {
        $blogs = $this->blogService->search($request);
        return view('search',compact('blogs'));
    }
}
