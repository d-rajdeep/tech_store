@extends('admin.layouts.app')
@section('page-title', 'All Orders')
@section('content')
<div class="container mt-4">
    <h2>All Orders</h2>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>SL No.</th>
                <th>Order Id</th>
                <th>User Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Pin Code</th>
                <th>Address</th>
                <th>Email Id</th>
                <th>City</th>
                <th>State</th>
                <th>Total</th>
                <th>Status</th>
                <th>Ordered At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $index => $order)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->pincode }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->city }}</td>
                    <td>{{ $order->state }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="14" class="text-center">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
