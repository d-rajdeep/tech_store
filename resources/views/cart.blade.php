@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center fw-bold">Your Shopping Cart</h2>

        @if (session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        @if ($cart && count($cart))
            <div class="table-responsive shadow-sm rounded">
                <table class="table table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $grandTotal = 0; @endphp
                        @foreach ($cart as $id => $item)
                            @php
                                $total = $item['price'] * $item['quantity'];
                                $grandTotal += $total;
                            @endphp
                            <tr>
                                <td>
                                    <img src="{{ $item['image'] }}" width="70" height="70" class="rounded shadow-sm">
                                </td>
                                <td class="fw-semibold">{{ $item['name'] }}</td>
                                <td class="text-success fw-bold">₹{{ number_format($item['price'], 2) }}</td>
                                <td>
                                    <form action="{{ route('cart.update', $id) }}" method="POST" class="d-flex align-items-center">
                                        @csrf
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}"
                                               min="1" class="form-control form-control-sm w-50">
                                        <button type="submit" class="btn btn-sm btn-outline-primary ms-2">
                                            Update
                                        </button>
                                    </form>
                                </td>
                                <td class="fw-bold">₹{{ number_format($total, 2) }}</td>
                                <td>
                                    <a href="{{ route('cart.remove', $id) }}"
                                       class="btn btn-sm btn-outline-danger">
                                        Remove
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="table-light">
                            <td colspan="4" class="text-end fw-bold">Grand Total:</td>
                            <td colspan="2" class="fw-bold text-success fs-5">
                                ₹{{ number_format($grandTotal, 2) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="text-end mt-4">
                <a href="{{ route('checkout.index') }}" class="btn btn-success btn-lg px-5 py-2 shadow">
                    Proceed to Buy
                </a>
            </div>
        @else
            <div class="text-center py-5">
                <p class="text-muted fs-5">Your cart is empty.</p>
                <a href="{{ route('shop.index') }}" class="btn btn-primary mt-3">
                    Continue Shopping
                </a>
            </div>
        @endif
    </div>
@endsection
