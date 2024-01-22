@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name" class="form-control" value="{{old('name')}}"><br>
        <input type="text" name="sku" placeholder="SKU" class="form-control" value="{{old('sku')}}"><br>
        <textarea name="description" class="form-control" placeholder="Description">{{old('description')}}</textarea> <br>
        <input type="text" name="price" placeholder="price" class="form-control" value="{{old('price')}}"><br>
        <input type="submit" value="Submit" class="btn btn-success">
    </form>
@endsection