@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
<form action="{{ route('sales_return.update', $salesReturn->id) }}" method="post" style="width: 50%;" enctype="multipart/form-data">
    @csrf
    
    <label for="customerName">product_name:</label>
    <input type="text" name="product_name" placeholder="product_name" class="form-control" value="{{ old('product_name', $salesReturn->product_name) }}">
    
    <label for="date">date:</label>
    <input type="text" name="date" placeholder="date" class="form-control" value="{{ old('date', $salesReturn->date) }}">
   

    <label for="customer">customer:</label>
    <input type="text" name="customer" placeholder="customer" class="form-control" value="{{ old('customer', $salesReturn->customer) }}">

    <label for="status">status:</label>
    <input type="text" name="status" placeholder="status" class="form-control" value="{{ old('status', $salesReturn->status) }}">

    <label for="grand_total">grand_total:</label>
    <input type="text" name="grand_total" placeholder="grand_total" class="form-control" value="{{ old('grand_total', $salesReturn->grand_total) }}">

    <label for="paid">paid:</label>
    <input type="text" name="paid" placeholder="paid" class="form-control" value="{{ old('paid', $salesReturn->paid) }}">

    <label for="due">due:</label>
    <input type="text" name="due" placeholder="due" class="form-control" value="{{ old('due', $salesReturn->due) }}">

    <label for="payment_status">payment_status:</label>
    <input type="text" name="payment_status" placeholder="payment_status" class="form-control" value="{{ old('payment_status', $salesReturn->payment_status) }}">

    <input type="submit" value="Submit" class="btn btn-success">
</form>

@endsection