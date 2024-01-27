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
        <th>Date</th>
        <th>Customer Name</th>
        <th>Referance</th>
        <th>Status</th>
        <th>Payment</th>
        <th>Total</th>
        <th>Paid</th>
        <th>Due</th>
        <th>Biller</th>
        <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($data as $key=> $item)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->Date}}</td>
        <td>{{$item->CustomerName}}</td>
        <td>{{$item->Reference}}</td>
        
        <td>
            <span class="badges bg-lightgreen">{{$item->Status}}</span>
          </td>
        <td>
            <span class="badges bg-lightred">{{$item->Payment}}</span>
          </td>
        
        <td>{{$item->Total}}</td>
        <td>{{$item->Paid}}</td>
        <td>
            <span class="badges bg-lightred">{{$item->Due}}</span>
          </td>
       
        <td>{{$item->Biller}}</td>
        <td><a class="btn btn-success" href="{{route('sales.edit', $item->id)}}">Edit</a> | 
            <a class="btn btn-danger" href="{{route('sales.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection



       