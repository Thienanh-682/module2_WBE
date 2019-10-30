@extends('home')

@section('index')
    <h1 class="text-center">Quản lí học sinh</h1>
    <a href="{{route('student.index')}}" class="btn btn-success">Home</a>
    <form method="get" action="{{route('student.search')}}">
        <hr>
        @csrf
        <input type="text" placeholder="Name/Phone/Address" name="search">
        <input type="submit" class="btn btn-success" value="Search">

    </form>
    <a href="{{route('student.create')}}" class="btn btn-success">Create</a>
    <table class="table">
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
        @foreach($dataSearch as $key => $student )
            <tbody>
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->address}}</td>
                <td><img src="{{asset('storage/'. $student->image)}}" style="width: 50px;height: 50px"></td>
                <td>
                    <a href="{{route('student.delete',$student->id)}}" class="btn btn-success">Delete</a>
                    <a href="{{route('student.edit',$student->id)}}" class="btn btn-success">Edit</a>
                </td>
            </tr>
            <tbody/>
        @endforeach
    </table>
@endsection
