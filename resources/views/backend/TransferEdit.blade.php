@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
<form action="{{ route('transfer.update', $transfer->id) }}" method="post"  enctype="multipart/form-data">
    @csrf
    <label for="date">Date:</label>
    <input type="text" name="date" placeholder="date" class="form-control" value="{{ old('date', $transfer->date ) }}">

    <label for="from">from:</label>
    <input type="text" name="from" placeholder="from" class="form-control" value="{{ old('from', $transfer->from) }}">

    <label for="paid">paid:</label>
    <input type="text" name="paid" placeholder="paid" class="form-control" value="{{ old('paid', $transfer->paid) }}">

    <label for="items">items:</label>
    <input type="text" name="items" placeholder="items" class="form-control" value="{{ old('items', $transfer->items) }}">

    <label for="status">status:</label>
    <input type="text" name="status" placeholder="status" class="form-control" value="{{ old('status', $transfer->status) }}">

    
    <input type="submit" value="Submit" class="btn btn-success">
</form>

@endsection