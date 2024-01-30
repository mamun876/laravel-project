@extends('backend.layouts.app')

@section('title', 'Expense Form')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Expense Form</h1>

    <form action="{{ route('expense.store') }}" method="post">
        @csrf <!-- Add CSRF token for security -->

        <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name:</label>
            <input type="text" class="form-control" value="{{ old('categoryName') }}" id="categoryName" name="categoryName">
        </div>

        <div class="mb-3">
            <label for="reference" class="form-label">Reference:</label>
            <input type="text" class="form-control" value="{{ old('Reference') }}" id="reference" name="Reference">
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" value="{{ old('Date') }}" class="form-control" id="date" name="Date">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select class="form-select" id="status" name="status">
                <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ old('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ old('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount:</label>
            <input type="number" class="form-control" value="{{ old('Amount') }}" id="amount" name="Amount" step="0.01">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="Description" rows="4">{{ old('Description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
