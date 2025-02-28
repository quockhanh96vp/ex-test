@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Sale Items</h2>
    <a href="{{ route('items.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Item Code</th>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Expired Date</th>
                        <th>Note</th>
                        <th style="width: 150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->item_code }}</td>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ number_format($item->quantity, 2) }}</td>
                        <td>{{ date('d/m/Y', strtotime($item->expired_date)) }}</td>
                        <td>{{ $item->note }}</td>
                        <td>
                            <a href="{{ route('items.edit', $item) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 