<?php


namespace App\Http\Repositories\eloquent;


use App\Blog;
use App\Http\Repositories\BlogRepositoryInterface;

class BlogEloquentRepository implements BlogRepositoryInterface
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    function index()
    {
        return $this->blog->paginate(2);
    }

    function findById($id)
    {
        return $this->blog->findOrFail($id);
    }

    function store($obj)
    {
        return $obj->save();
    }

    function destroy($obj)
    {
       return $obj->delete();
    }

    function update($obj)
    {
        return $obj->save();
    }

    function search($keyWord)
    {
        return $this->blog->where("name","like","%$keyWord%")->paginate(2);
    }
}
