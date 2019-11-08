<?php


namespace App\Http\Services\impl;


use App\Blog;
use App\Http\Repositories\BlogRepositoryInterface;
use App\Http\Services\BlogServicesInterface;
use Illuminate\Support\Facades\Storage;

class BlogServices implements BlogServicesInterface
{
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getAll()
    {
        return $this->blogRepository->index();
    }

    public function findById($id)
    {
      return $this->blogRepository->findById($id);
    }

    public function create($request)
    {
        $blog = new Blog();

        $blog->name = $request->name;
        $blog->category = $request->category;
        $blog->author = $request->author;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('image','public');
            $blog->image = $path;
        }
        return $this->blogRepository->store($blog);
    }

    public function delete($id)
    {
        $blog = $this->blogRepository->findById($id);
        Storage::delete('/public/'.$blog->image);
        return $this->blogRepository->destroy($blog);
    }

    public function edit($request, $id)
    {
        $blog = $this->blogRepository->findById($id);
        $blog->name = $request->name;
        $blog->category = $request->category;
        $blog->author = $request->author;
        if($request->hasFile('image')) {
            Storage::delete('/public/'. $blog->image);
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $blog->image = $path;
        }
        return $this->blogRepository->update($blog);
    }

    public function search($request)
    {
       $keyWord = $request->search;
       return $this->blogRepository->search($keyWord);
    }
}
