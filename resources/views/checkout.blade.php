@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center fw-bold">Checkout</h2>

    @if($cart && count($cart))
        <div class="table-responsive shadow-sm rounded mb-4">
            <table class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php $grandTotal = 0; @endphp
                    @foreach($cart as $item)
                        @php
                            $total = $item['price'] * $item['quantity'];
                            $grandTotal += $total;
                        @endphp
                        <tr>
                            <td class="fw-semibold">{{ $item['name'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td class="text-success fw-bold">₹{{ number_format($item['price'], 2) }}</td>
                            <td class="fw-bold">₹{{ number_format($total, 2) }}</td>
                        </tr>
                    @endforeach
                    <tr class="table-light">
                        <td colspan="3" class="text-end fw-bold">Grand Total:</td>
                        <td class="fw-bold text-success fs-5">₹{{ number_format($grandTotal, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Shipping Form -->
        <div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <h4 class="fw-bold mb-3">Shipping Address</h4>
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf

            <!-- Country -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Country/Region</label>
                <select name="country" class="form-select" readonly>
                    <option value="India" selected>India</option>
                </select>
            </div>

            <!-- State -->
            <div class="mb-3">
                <label class="form-label fw-semibold">State</label>
                <select name="state" class="form-select" required>
                    <option value="">-- Select State --</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Ladakh">Ladakh</option>
                </select>
            </div>

            <div class="row">
    <!-- Full Name -->
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Full Name</label>
        <input type="text" name="name" class="form-control" placeholder="First and Last name" required>
    </div>

    <!-- Mobile -->
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Mobile Number</label>
        <input type="tel" name="phone" class="form-control" placeholder="10-digit mobile number"
               pattern="[0-9]{10}" maxlength="10" required>
    </div>
</div>

<div class="row">
    <!-- Email -->
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Email Id</label>
        <input type="email" name="email" class="form-control" placeholder="admin@gmail.com">
    </div>


    <!-- Address -->
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Flat, House no., Building, Company, Apartment</label>
        <input type="text" name="address" class="form-control" placeholder="Enter full address" required>
    </div>
</div>

<div class="row">
    <!-- PIN Code -->
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">PIN Code</label>
        <input type="text" name="pincode" class="form-control" placeholder="6-digit PIN code"
               pattern="[0-9]{6}" maxlength="6" required>
    </div>

    <!-- Town/City -->
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Town/City</label>
        <input type="text" name="city" class="form-control" placeholder="Enter town/city" required>
    </div>
</div>




            <!-- Submit -->
            <div class="text-end">
                <button type="submit" class="btn btn-success btn-lg px-5 shadow">
                    Place Order
                </button>
            </div>
        </form>
    </div>
</div>
    @else
        <div class="text-center py-5">
            <p class="text-muted fs-5">Your cart is empty.</p>
            <a href="{{ route('shop') }}" class="btn btn-primary mt-3">Continue Shopping</a>
        </div>
    @endif
</div>
@endsection
