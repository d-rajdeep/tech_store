@extends('admin.layouts.app')
@section('page-title', 'All Products')
@section('content')
    <div class="container mt-4">
        <h2>List of Products</h2>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>SL No</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>SKU</th>
                    <th>Image</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td> {{-- SL No --}}
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category ? $product->category->name : 'N/A' }}</td>
                        <td>₹{{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->sku }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="60"
                                    height="60" class="rounded">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $product->created_at->format('d M, Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
