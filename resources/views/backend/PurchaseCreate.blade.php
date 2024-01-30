@extends('backend.layouts.app')
@section('title', 'purchase')
@section('content')
<<<<<<< HEAD
<form action="{{route('purchase.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="SupplierName" value="{{old('SupplierName')}}" placeholder="Supplier Name"> <br>
    <input type="text" name="Reference" value="{{old('Reference')}}" placeholder="Reference"> <br>
    <input type="date" name="Date" value="{{old('Date')}}" placeholder="Date"> <br>
    <input type="text" name="Status" value="{{old('Status')}}" placeholder="Status"> <br>
    <input type="number" name="GrandTotal" value="{{old('GrandTotal')}}" placeholder="Grand Total"> <br>
    <input type="number" name="Paid" value="{{old('Paid')}}" placeholder="Paid"> <br>
    <input type="number" name="Due" value="{{old('Due')}}" placeholder="Due"> <br>
    <input type="text" name="PaymentStatus" value="{{old('PaymentStatus')}}" placeholder="Payment Status"> <br>
=======
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
>>>>>>> 1a7e4c55eb372997a3019b1c968b27e2cd3c7d7b
    <input type="submit" value="Submit">
</form>
@endsection
