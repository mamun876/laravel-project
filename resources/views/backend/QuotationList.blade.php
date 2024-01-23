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
        <th>reference</th>
        <th>customer_name</th>
        <th>status</th>
        <th>grand_total</th>
       
        <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($quotation as $key=> $item)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->product_name}}</td>
        <td>{{$item->reference}}</td>
        <td>{{$item->customer_name}}</td>
        
        <td>
            <span class="badges bg-lightgreen">{{$item->status}}</span>
          </td>
      
        
        <td>{{$item->grand_total}}</td>
      
        <td>
            <span class="badges bg-lightgreen">{{$item->action}}</span>
        </td>
        
    </tr>
    @endforeach
</table>
</div>
@endsection



       