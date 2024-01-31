@extends('backend.layouts.app')
@section('title', 'purchase')
@section('content')

<form action="{{ route('purchase.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="SupplierName" placeholder="Supplier Name" value="{{ old('SupplierName') }}"> <br>
    <input type="text" name="Reference" placeholder="Reference" value="{{ old('Reference') }}"> <br>
    <input type="date" name="Date" placeholder="Date" value="{{ old('Date') }}"> <br>
    <input type="text" name="Status" placeholder="Status"> <br>
    <input type="number" name="GrandTotal" placeholder="Grand Total" value="{{ old('GrandTotal') }}"> <br>
    <input type="number" name="Paid" placeholder="Paid" value="{{ old('Paid') }}"> <br>
    <input type="number" name="Due" placeholder="Due" value="{{ old('Due') }}"> <br>
    <input type="text" name="PaymentStatus" placeholder="Payment Status" value="{{ old('PaymentStatus') }}"> <br>

    <input type="submit" value="Submit">
</form>
@endsection
