@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
    <form action="{{route('category.update')}}" method="post" enctype="multipart/form-data" style="width: 50%;">
        @csrf
        <input type="text" name="name" placeholder="name" class="form-control" value="{{old('name')}}">
         <input type="submit" value="Submit" class="btn btn-success">
    </form>
@endsection