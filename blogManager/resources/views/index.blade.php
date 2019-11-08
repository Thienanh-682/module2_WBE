@extends('home')

@section('index')
    <form method="get" action="{{route('blog.search')}}">
        @csrf
    <div>
        <input type="text" id="search" name="search">
        <button type="submit" value="search" class="btn btn-success">Search</button>
    </div><hr>
    </form>
    <a href="{{route('blog.create')}}" class="btn btn-success">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $key => $blog)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$blog->name}}</td>
            <td>{{$blog->category}}</td>
            <td>{{$blog->author}}</td>
            <td> <img src="{{asset( 'storage/'. $blog->image)}}" style="width: 50px;height: 60px"></td>
            <td>
                <a href="{{route('blog.delete', $blog->id)}}" class="btn btn-success">Delete</a>
                <a href="{{route('blog.update',$blog->id)}}" class="btn btn-success">Edit</a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
    {{$blogs->links()}}
    @endsection
