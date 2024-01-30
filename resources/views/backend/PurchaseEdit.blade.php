@extends('backend.layouts.app')
@section('title', 'purchase')
@section('content')
<<<<<<< HEAD
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
=======
<form action="{{ route('purchase.update',$data->id ) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="SupplierName" placeholder="Supplier Name" value="{{ old('SupplierName', $data->SupplierName) }}"> <br>
    <input type="text" name="Reference" placeholder="Reference" value="{{ old('Reference', $data->Reference) }}"> <br>
    <input type="date" name="Date" placeholder="Date" value="{{ old('Date', $data->Date) }}"> <br>
    <input type="text" name="Status" placeholder="Status" value="{{old('Status', $data->Status)}}"> <br>
    <input type="number" name="GrandTotal" placeholder="Grand Total" value="{{ old('GrandTotal', $data->GrandTotal) }}"> <br>
    <input type="number" name="Paid" placeholder="Paid" value="{{ old('Paid', $data->Paid) }}"> <br>
    <input type="number" name="Due" placeholder="Due" value="{{ old('Due', $data->Due) }}"> <br>
    <input type="text" name="PaymentStatus" placeholder="Payment Status" value="{{ old('PaymentStatus', $data->PaymentStatus) }}"> <br>
    <input type="submit" value="Submit">
</form>
@endsection
>>>>>>> 1a7e4c55eb372997a3019b1c968b27e2cd3c7d7b
