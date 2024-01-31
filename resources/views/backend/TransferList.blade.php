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
        <th>date</th>
        <th>from</th>
        <th>paid</th>
        <th>items</th>
        <th>status</th>
         <th>Action</th>
    </tr>
    <!-- @php($i=1) -->
    @foreach($transfer as $key=> $item)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->from}}</td>
        
        
        <td>
            <span class="badges bg-lightgreen">{{$item->paid}}</span>
        </td>
        <td>{{$item->items}}</td>
        <td>
            <span class="badges bg-lightgreen">{{$item->status}}</span>
          </td>
      

        <td><a class="btn btn-success" href="{{route('transfer.edit', $item->id)}}">Edit</a> | 
            <a class="btn btn-danger" href="{{route('transfer.delete', $item->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection



       