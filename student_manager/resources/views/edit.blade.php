@extends('home')

@section('index')
    <h1>Chỉnh sửa thông tin học sinh</h1>
    <div class="container">
        <div class="row">
            <form  method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$student->phone}}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$student->address}}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <img src="{{asset('storage/'. $student->image)}}" style="width: 50px;height: 50px">
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('student.index')}}"class="btn btn-success">Back</a>
            </form>
        </div>
    </div>

@endsection

