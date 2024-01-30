@extends('backend.layouts.app')
@section('title', 'purchase')
@section('content')
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
