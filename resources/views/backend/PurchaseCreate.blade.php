@extends('backend.layouts.app')
@section('title', 'purchase')
@section('content')
<form action="{{route('purchase.store')}}" method="post" enctype="multipart/form-data">

    <input type="text" name="SupplierName" placeholder="Supplier Name"> <br>
    <input type="text" name="Reference" placeholder="Reference"> <br>
    <input type="date" name="Date" placeholder="Date"> <br>
    <input type="text" name="Status" placeholder="Status"> <br>
    <input type="number" name="GrandTotal" placeholder="Grand Total"> <br>
    <input type="number" name="Paid" placeholder="Paid"> <br>
    <input type="number" name="Due" placeholder="Due"> <br>
    <input type="text" name="PaymentStatus" placeholder="Payment Status">
    <input type="submit" value="Submit">

</form>

@endsection