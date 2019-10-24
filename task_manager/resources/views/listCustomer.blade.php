
@extends('home')
@section('content')
{{--   <center><h2>Quản Lý Khách Hàng</h2></center>--}}
    <a href="{{route('customer.create')}}" class="btn btn-success">Create</a>
<table class="table" border="1">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">address</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    @foreach($customers as $key => $customer )
    <tbody>
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->address}}</td>
        <td>
            <a href="{{route('customer.delete',$customer->id)}}" class="btn btn-success">Delete</a>
            <a href="{{route('customer.update',$customer->id)}}" class="btn btn-success">Edit</a>
        </td>
    </tr>
    </tbody>
        @endforeach
</table>

@endsection
