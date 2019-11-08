@extends('home')

@section('index')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name" value="{{$blog->name}}">

        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Enter capacity" value="{{$blog->category}}">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author" value="{{$blog->author}}">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <img src="{{asset('storage/'. $blog->image)}}" style="width: 50px;height: 50px">
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
