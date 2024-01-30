@extends('backend.layouts.app')
@section('title', 'purchase')
@section('content')
<form action="{{route('purchase.update', $purchase->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="SupplierName" value="{{old('SupplierName' , $purchase->SupplierName)}}" placeholder="Supplier Name"> <br>
    <input type="text" name="Reference" value="{{old('Reference' , $purchase->Reference)}}" placeholder="Reference"> <br>
    <input type="date" name="Date" value="{{old('Date' , $purchase->Date)}}" placeholder="Date"> <br>
    <input type="text" name="Status" value="{{old('Status' ,$purchase->Status)}}" placeholder="Status"> <br>
    <input type="number" name="GrandTotal" value="{{old('GrandTotal', $purchase->GrandTotal )}}" placeholder="Grand Total"> <br>
    <input type="number" name="Paid" value="{{old('Paid' , $purchase->Paid)}}" placeholder="Paid"> <br>
    <input type="number" name="Due" value="{{old('Due' , $purchase->Due)}}" placeholder="Due"> <br>
    <input type="text" name="PaymentStatus" value="{{old('PaymentStatus', $purchase->PaymentStatus)}}" placeholder="Payment Status"> <br>
    <input type="submit" value="Submit">

</form>

@endsection