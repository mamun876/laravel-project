@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')
<form action="{{ route('sales.store') }}" method="post" style="width: 50%;" enctype="multipart/form-data">
    @csrf
    <label for="date">Date:</label>
    <input type="text" name="Date" placeholder="Date" class="form-control" value="{{ old('Date') }}">

    <label for="customerName">Customer Name:</label>
    <input type="text" name="CustomerName" placeholder="Customer Name" class="form-control" value="{{ old('CustomerName') }}">

    <label for="reference">Reference:</label>
    <input type="text" name="Reference" placeholder="Reference" class="form-control" value="{{ old('Reference') }}">

    <label for="status">Status:</label>
    <input type="text" name="Status" placeholder="Status" class="form-control" value="{{ old('Status') }}">

    <label for="payment">Payment:</label>
    <input type="text" name="Payment" placeholder="Payment" class="form-control" value="{{ old('Payment') }}">

    <label for="total">Total:</label>
    <input type="text" name="Total" placeholder="Total" class="form-control" value="{{ old('Total') }}">

    <label for="paid">Paid:</label>
    <input type="text" name="Paid" placeholder="Paid" class="form-control" value="{{ old('Paid') }}">

    <label for="due">Due:</label>
    <input type="text" name="Due" placeholder="Due" class="form-control" value="{{ old('Due') }}">

    <label for="biller">Biller:</label>
    <input type="text" name="Biller" placeholder="Biller" class="form-control" value="{{ old('Biller') }}">

    <input type="submit" value="Submit" class="btn btn-success">
</form>

@endsection