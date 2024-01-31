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
        <th>CategoryName</th>
        <th>Reference</th>
        <th>Date</th>
        <th>Status</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($expense as $key=> $item)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->CategoryName}}</td>
        <td>{{$item->Reference}}</td>
        <td>{{$item->Date}}</td>
        
        <td>
            <span class="badges bg-lightgreen">{{$item->Status}}</span>
          </td>
      
        
        <td>{{$item->Amount}}</td>
      
       
        <td>{{$item->Description}}</td>
        <td><a class="btn btn-success" href="{{route('expense.edit', $item->id)}}">Edit</a> | 
            <a class="btn btn-danger" href="{{route('expense.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection



       