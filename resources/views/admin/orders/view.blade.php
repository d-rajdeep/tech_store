@extends('admin.layouts.app')
@section('page-title', 'All Orders')
@section('content')
    <div class="container mt-4">
        <h2>List of Orders</h2>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>SL No.</th>
                    <th>Order Id</th>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Ordered At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orderItems as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->order->id ?? 'N/A' }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->created_at->format('d M Y, h:i A') }}</td>
                        <td>
                            <a href="{{ route('admin.orders.view-details', $item->order->id) }}"
                                class="btn btn-sm btn-primary">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No order items found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection