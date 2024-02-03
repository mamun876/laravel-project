@extends('backend.layouts.app')
@section('title', 'Customer Page')
@section('content')
<form action="{{ route('customer.store') }}" method="post">
    @csrf
    
    <label for="customerName"> customer_name:</label>
    <input type="text" name=" customer_name" placeholder=" customer_name" class="form-control" value="{{ old(' customer_name') }}">
    
    <label for="code">code:</label>
    <input type="text" name="code" placeholder="code" class="form-control" value="{{ old('code') }}">
    <label for="customer">customer:</label>
    <input type="text" name="customer" placeholder="customer" class="form-control" value="{{ old('customer') }}">
    <label for="reference">phone:</label>
    <input type="text" name="phone" placeholder="phone" class="form-control" value="{{ old('phone') }}">

    <label for="email">email:</label>
    <input type="text" name="email" placeholder="email" class="form-control" value="{{ old('email') }}">

    <label for="country">country:</label>
    <input type="text" name="country" placeholder="country" class="form-control" value="{{ old('country') }}">

    <input type="submit" value="Submit" class="btn btn-success">
</form>

@endsection