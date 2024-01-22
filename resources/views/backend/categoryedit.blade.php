@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
    <form action="{{route('category.update', $category->id)}}" method="post" enctype="multipart/form-data" style="width: 50%;">
        @csrf
        <input type="text" name="name" placeholder="name" class="form-control" value="{{old('name', $category->name)}}">
         <input type="submit" value="Update" class="btn btn-success">
    </form>
@endsection