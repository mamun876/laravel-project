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
        <th>SupplierName</th>
        <th>Reference</th>
        <th>Date</th>
        <th>Status</th>
        <th>GrandTotal</th>
        <th>Paid</th>
        <th>Due</th>
        <th>PaymentStatus</th>
        <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($purchase as $key=> $item)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->SupplierName}}</td>
        <td>{{$item->Reference}}</td>
        <td>{{$item->Date}}</td>
        
        <td>
            <span class="badges bg-lightgreen">{{$item->Status}}</span>
          </td>
        
        <td>{{$item->GrandTotal}}</td>
       
        <td>
            <span class="badges bg-lightgreen">{{$item->Paid}}</span>
          </td>
        <td>
            <span class="badges bg-lightred">{{$item->Due}}</span>
          </td>
       
        <td>{{$item->PaymentStatus}}</td>
        <td><a class="btn btn-success" href="{{route('purchase.edit', $item->id)}}">Edit</a> | 
            <a class="btn btn-danger" href="{{route('purchase.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection