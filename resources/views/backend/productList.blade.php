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
        <th>Product Name</th>
        <th>SKU</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Unit</th>
        <th>Qty</th>
        <th>Created By</th>
        <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($products as $key=> $item)

    <tr>
        <td>{{$key+1}}</td>
        <td>{{$item->product_name}}</td>
        <td>{{$item->sku}}</td>
        <td>{{$item->category->category_name}}</td>
        <td>{{$item->brand->brand_name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->unit}}</td>
        <td>{{$item->qty}}</td>
        <td>{{$item->created_by}}</td>
        <td><a class="btn btn-success" href="{{route('product.edit', $item->id)}}">Edit</a> | 
            <a class="btn btn-danger" href="{{route('product.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection