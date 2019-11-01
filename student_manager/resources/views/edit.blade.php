@extends('home')

@section('index')
    <h1>Edit Student Information</h1>
    <div class="container">
        <div class="row">
            <form  method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control
                            @if ($errors->has('name'))
                                border-danger
                            @endif
                            " id="name" name="name" value="{{$student->name}}">
                    @if($errors->has('name'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png"> {{$errors->first('name')}}
                        </p>
                        @endif
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control
                         @if ($errors->has('phone'))
                                border-danger
                            @endif
                                " id="phone" name="phone" value="{{$student->phone}}">
                    @if($errors->has('phone'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png"> {{$errors->first('phone')}}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control
                        @if ($errors->has('address'))
                        border-danger
                        @endif
                                " id="address" name="address" value="{{$student->address}}">
                    @if($errors->has('address'))
                        <p class="text-danger"><img
                                src="https://img.icons8.com/color/20/000000/high-importance--v1.png"> {{$errors->first('address')}}
                        </p>
                    @endif
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <img src="{{asset('storage/'. $student->image)}}" style="width: 50px;height: 50px">
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('student.index')}}" class="btn btn-success">Back</a>
            </form>
        </div>
    </div>

@endsection

