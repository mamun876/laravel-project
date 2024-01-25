@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="container mt-4">
@if (session('msg'))
    <div class="alert alert-danger">{{session('msg')}}</div>
    @endif
<table class="table table-striped text-center my-4">
    <tr>

        <th>SL</th>
        <th>Image</th>
        <th>Brand Name</th>
        <th>Brand Description</th>
        <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($brands as $key=> $item)

    <tr>
        <td>{{$key+1}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->brand_name}}</td>
        <td>{{$item->brand_description}}</td>
        <td><a class="btn btn-success" href="{{route('brand.edit', $item->id)}}">Edit</a> | <a class="btn btn-danger" href="{{route('brand.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
    </tr>
    @endforeach
</table>
</div>
@endsection