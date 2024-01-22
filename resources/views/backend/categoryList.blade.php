@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="container mt-4">
<table class="table table-striped text-center my-4">
    <tr>

        <th>SL</th>
        <th>Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($categories as $key=> $item)

    <tr>
        <td>{{$key+1}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->active}}</td>
       
        <td><a class="btn btn-success" href="">Edit</a> | <a class="btn btn-danger" href="delete{{$item->id}}">Delete</a></td>
    </tr>
    @endforeach
</table>
</div>
@endsection