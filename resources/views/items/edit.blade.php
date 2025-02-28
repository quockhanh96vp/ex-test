@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Item</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('items.update', $item) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="item_code" class="form-label">Item Code</label>
                <input type="text" class="form-control @error('item_code') is-invalid @enderror" 
                    id="item_code" name="item_code" value="{{ old('item_code', $item->item_code) }}" maxlength="6">
                @error('item_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="item_name" class="form-label">Item Name</label>
                <input type="text" class="form-control @error('item_name') is-invalid @enderror" 
                    id="item_name" name="item_name" value="{{ old('item_name', $item->item_name) }}" maxlength="50">
                @error('item_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" step="0.01" class="form-control @error('quantity') is-invalid @enderror" 
                    id="quantity" name="quantity" value="{{ old('quantity', $item->quantity) }}">
                @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="expired_date" class="form-label">Expired Date</label>
                <input type="date" class="form-control @error('expired_date') is-invalid @enderror" 
                    id="expired_date" name="expired_date" value="{{ old('expired_date', $item->expired_date) }}">
                @error('expired_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <textarea class="form-control @error('note') is-invalid @enderror" 
                    id="note" name="note" maxlength="60">{{ old('note', $item->note) }}</textarea>
                @error('note')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('items.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update Item</button>
            </div>
        </form>
    </div>
</div>
@endsection 