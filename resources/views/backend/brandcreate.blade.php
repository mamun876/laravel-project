@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data" style="width: 50%;">
        @csrf
        <input type="image" name="image" placeholder="image" class="form-control" value="{{old('image')}}">
        <input type="text" name="brand_name" placeholder="brand_name" class="form-control" value="{{old('brand_name')}}">
        <input type="text" name="brand_description" placeholder="brand_description" class="form-control" value="{{old('brand_description')}}">
         <input type="submit" value="Submit" class="btn btn-success">
    </form>
@endsection