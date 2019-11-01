@extends('home')

@section('index')
    <h1 class="text-center">Student Management System</h1>
    <form method="get" action="{{route('student.search')}}">
        @csrf

        <input type="text" placeholder="Name/Phone/Address" class="
                    @if($errors->has('search'))
                            border-danger
                        @endif" name="search">
        <input type="submit" class="btn btn-success"  value="Search"><hr>
        @if ($errors->has('search'))
           <p class="text-danger"><img
                   src="https://img.icons8.com/color/20/000000/high-importance--v1.png"> {{$errors->first('search')}}</p>
        @endif
        </form>
    <a href="{{route('student.create')}}" class="btn btn-success">Create</a>
    <table class="table table-bordered" style="background: #f8f9fa">
        <thead class="btn-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($students as $key => $student )
            <tbody>

            <tr>

                <th scope="row">{{++$key}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                <td><img src="{{asset( 'storage/'. $student->image)}}" style="width: 50px;height: 60px"></td>
                <td>
                    <a href="{{route('student.delete',$student->id)}}" class="btn btn-success">Delete</a>
                    <a href="{{route('student.edit',$student->id)}}" class="btn btn-success">Edit</a>
                </td>
            </tr>
            <tbody/>
        @endforeach
    </table>
    {{$students->links()}}
@endsection
