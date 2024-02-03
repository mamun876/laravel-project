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
        <th>customer_name</th>
        <th>code</th>
        <th>customer</th>
        <th>phone</th>
        <th>email</th>
        <th>country</th>
        
       
         <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($customer as $key=> $item)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->customer_name}}</td>
        <td>{{$item->code}}</td>
        <td>{{$item->customer}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->country}}</td>
      
      

        <td><a class="btn btn-success" href="{{route('customer.edit', $item->id)}}">Edit</a> | 
            <a class="btn btn-danger" href="{{route('customer.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection



       