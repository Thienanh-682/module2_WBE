@extends('home')

@section('index')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">

        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Enter capacity">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
