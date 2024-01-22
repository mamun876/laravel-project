@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
    <form action="{{route('product.update', $products->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name" class="form-control" value="{{old('name', $products->name)}}"><br>
        <input type="text" name="sku" placeholder="SKU" class="form-control" value="{{old('sku', $products->sku)}}"><br>
        <textarea name="description" class="form-control" placeholder="Description">{{old('description', $products->description)}}</textarea> <br>
        <input type="text" name="price" placeholder="price" class="form-control" value="{{old('price', $products->price)}}"><br>
        <input type="submit" value="Update" class="btn btn-success">
    </form>
@endsection 