@extends('homee')

@section('content')
  <a href= "{{route('create')}}" class="btn btn-success">Create</a>
<table class="table table-borderless">
    <thead class="btn-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($student as $key => $Student )
    <tbody>
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$Student->name}}</td>
        <td>{{$Student->phone}}</td>
        <td>{{$Student->address}}</td>
        <td>
            <a href="{{route('delete',$Student->id)}}" class="btn btn-success">Delete</a>
            <a href="{{route('update',$Student->id)}}" class="btn btn-success">Edit</a>
        </td>
    </tr>
        <tbody/>
        @endforeach
</table>
    @endsection
