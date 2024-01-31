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
        <th>product_name</th>
        <th>date</th>
        <th>customer</th>
        <th>status</th>
        <th>grand_total</th>
        <th>paid</th>
        <th>due</th>
        <th>payment_status</th>
         <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($sales_return as $key=> $item)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->product_name}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->customer}}</td>
        
        
        <td>
            <span class="badges bg-lightgreen">{{$item->status}}</span>
        </td>
        <td>{{$item->grand_total}}</td>
        <td>
            <span class="badges bg-lightgreen">{{$item->paid}}</span>
        </td>
        
        <td>
            <span class="badges bg-lightred">{{$item->due}}</span>
          </td>
        <td>
            <span class="badges bg-lightgreen">{{$item->payment_status}}</span>
          </td>
      

        <td><a class="btn btn-success" href="{{route('sales_return.edit', $item->id)}}">Edit</a> | 
            <a class="btn btn-danger" href="{{route('sales_return.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection



       