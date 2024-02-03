@extends('backend.layouts.app')
@section('title', 'purchase')
@section('content')

<form action="{{ route('purchase_return.update', $purchase_return->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="image" placeholder="Image name"  value="{{ old('image', $purchase_return->image) }}"> <br>
    <input type="date" name="date" placeholder="date" value="{{ old('date', $purchase_return->date) }}"> <br>
    <input type="text" name="supplier" placeholder="supplier" value="{{old('supplier', $purchase_return->supplier)}}"> <br>
    <input type="number" name="reference" placeholder="reference" value="{{ old('reference', $purchase_return->reference) }}"> <br>
    <input type="text" name="status" placeholder="status" value="{{ old('status', $purchase_return->status) }}"> <br>
    <input type="number" name="grand_total" placeholder="grand_total" value="{{ old('grand_total', $purchase_return->grand_total) }}"> <br>
    <input type="number" name="paid" placeholder="paid" value="{{ old('paid', $purchase_return->paid) }}"> <br>
    <input type="number" name="due" placeholder="due" value="{{ old('due', $purchase_return->due) }}"> <br>
    <input type="number" name="payment" placeholder="payment" value="{{ old('payment', $purchase_return->payment) }}"> <br>
    

    <input type="submit" value="Submit">
</form>
@endsection
