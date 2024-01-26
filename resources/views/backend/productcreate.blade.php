@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="product_name" placeholder="name" class="form-control" value="{{old('product_name')}}"><br>
        <input type="text" name="sku" placeholder="SKU" class="form-control" value="{{old('sku')}}"><br>
        <input type="text" name="category" placeholder="category" class="form-control" value="{{old('category')}}"><br>
        <input type="text" name="brand" placeholder="brand" class="form-control" value="{{old('brand')}}"><br>
        <input type="text" name="price" placeholder="price" class="form-control" value="{{old('price')}}"><br>
        <input type="text" name="unit" placeholder="unit" class="form-control" value="{{old('unit')}}"><br>
        <input type="text" name="qty" placeholder="qty" class="form-control" value="{{old('qty')}}"><br>
        <input type="text" name="created_by" placeholder="created_by" class="form-control" value="{{old('created_by')}}"><br>
        <input type="submit" value="Submit" class="btn btn-success">
    </form>
@endsection