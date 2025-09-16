@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <!-- Product Image -->
            <div class="col-lg-6 col-md-12">
                <div class="product-image">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/images/no-image.png') }}"
                        alt="{{ $product->name }}" class="img-fluid rounded shadow">
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6 col-md-12">
                <div class="product-details">
                    <span class="badge bg-primary mb-2">
                        {{ $product->category ? $product->category->name : 'Uncategorized' }}
                    </span>
                    <h2 class="mb-3">{{ $product->name }}</h2>

                    <div class="price mb-3">
                        <h4 class="text-success">₹{{ number_format($product->price, 2) }}</h4>
                    </div>

                    {{-- Example rating --}}
                    <ul class="review list-inline mb-3">
                        <li class="list-inline-item"><i class="lni lni-star-filled text-warning"></i></li>
                        <li class="list-inline-item"><i class="lni lni-star-filled text-warning"></i></li>
                        <li class="list-inline-item"><i class="lni lni-star-filled text-warning"></i></li>
                        <li class="list-inline-item"><i class="lni lni-star-filled text-warning"></i></li>
                        <li class="list-inline-item"><i class="lni lni-star"></i></li>
                        <li class="list-inline-item"><span>4.0 Review(s)</span></li>
                    </ul>

                    <p class="mb-4">{{ $product->description }}</p>

                    <div class="d-flex gap-3">
                        <a href="{{ route('cart.add', $product->id) }}" class="btn nav-btn">
                            <i class="lni lni-cart"></i> Add to Cart
                        </a>
                        <a href="{{route('index')}}" class="btn btn-outline-secondary">
                            Back to Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
