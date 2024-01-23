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
        <th>country_name</th>
        <th>region</th>
        <th>status</th>
        <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($place as $key=> $item)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->country_name}}</td>
        <td>{{$item->region}}</td>
       
        <td>
            <span class="badges bg-lightgreen">{{$item->status}}</span>
        </td>
      
      

        <td><a class="btn btn-success" href="">Edit</a> | 
            <a class="btn btn-danger" href="" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection



       