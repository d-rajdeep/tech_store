@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-success">✅ Order Placed Successfully!</h2>
        <p>Order ID: <strong>#{{ $order->id }}</strong></p>
        <p>Total Amount: <strong>₹{{ number_format($order->total, 2) }}</strong></p>
        <a href="{{ route('shop') }}" class="btn btn-primary mt-3">Continue Shopping</a>
    </div>
</div>
@endsection
