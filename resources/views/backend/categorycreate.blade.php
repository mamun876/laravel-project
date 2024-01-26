@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data" style="width: 50%;">
    @csrf
    <input type="text" name="category_name" placeholder="Category Name" class="form-control" value="{{ old('category_name') }}">
    <input type="text" name="category_code" placeholder="Category Code" class="form-control" value="{{ old('category_code') }}">
    <input type="text" name="description" placeholder="Description" class="form-control" value="{{ old('description') }}">
    <input type="text" name="created_by" placeholder="Created By" class="form-control" value="{{ old('created_by') }}">
    <input type="submit" value="Submit" class="btn btn-success">
</form>
@endsection