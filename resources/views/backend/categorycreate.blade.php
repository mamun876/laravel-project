@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data" style="width: 50%;">
        @csrf
        <input type="text" name="category_name" placeholder="category_name" class="form-control" value="{{old('category_name')}}">
        <input type="text" name="category_code" placeholder="category_code" class="form-control" value="{{old('category_code')}}">
        <input type="text" name="description" placeholder="description" class="form-control" value="{{old('description')}}">
        <input type="text" name="created_by" placeholder="created_by" class="form-control" value="{{old('created_by')}}">
         <input type="submit" value="Submit" class="btn btn-success">
    </form>
@endsection