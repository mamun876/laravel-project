@extends('backend.layouts.app')
@section('title', 'purchase')
@section('content')

<form action="{{ route('purchase_return.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="image" placeholder="Image name"  value="{{ old('image') }}"> <br>
    <input type="date" name="date" placeholder="date" value="{{ old('date') }}"> <br>
    <input type="text" name="supplier" placeholder="supplier"> <br>
    <input type="number" name="reference" placeholder="reference" value="{{ old('reference') }}"> <br>
    <input type="text" name="status" placeholder="status" value="{{ old('status') }}"> <br>
    <input type="number" name="grand_total" placeholder="grand_total" value="{{ old('grand_total') }}"> <br>
    <input type="number" name="paid" placeholder="paid" value="{{ old('paid') }}"> <br>
    <input type="number" name="due" placeholder="due" value="{{ old('due') }}"> <br>
    <input type="number" name="payment" placeholder="payment" value="{{ old('payment') }}"> <br>
    

    <input type="submit" value="Submit">
</form>
@endsection
