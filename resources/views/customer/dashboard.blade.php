@extends('layouts.app')
@section('content')

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">My Account</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{ route('index') }}"><i class="lni lni-home"></i> Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Dashboard Area -->
<div class="dashboard section">
    <div class="container">
        <div class="row">
            <!-- Sidebar Menu -->
            <div class="col-lg-3 col-md-4 col-12">
                <div class="dashboard-sidebar">
                    <div class="dashboard-user-profile">
                        <div class="user-avatar">
                            <img src="{{ Auth::guard('customer')->user()->avatar ?? '/assets/images/user/default-avatar.png' }}" alt="User Avatar">
                        </div>
                        <div class="user-info">
                            <h4>{{ Auth::guard('customer')->user()->name }}</h4>
                            <p>{{ Auth::guard('customer')->user()->email }}</p>
                        </div>
                    </div>

                    <ul class="dashboard-menu">
                        <li><a href="#dashboard" class="active" data-tab="dashboard"><i class="lni lni-dashboard"></i> Dashboard</a></li>
                        <li><a href="#profile" data-tab="profile"><i class="lni lni-user"></i> Edit Profile</a></li>
                        <li><a href="#orders" data-tab="orders"><i class="lni lni-shopping-basket"></i> Order History</a></li>
                        <li><a href="#payments" data-tab="payments"><i class="lni lni-credit-cards"></i> Payment Methods</a></li>
                        <li><a href="#addresses" data-tab="addresses"><i class="lni lni-map-marker"></i> Saved Addresses</a></li>
                        <li><a href="#terms" data-tab="terms"><i class="lni lni-protection"></i> Terms & Policy</a></li>
                        <li><a href="#help" data-tab="help"><i class="lni lni-support"></i> Help Center</a></li>
                        <li>
                            <form action="{{ route('customer.logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="logout-btn"><i class="lni lni-power-switch"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8 col-12">
                <div class="main-content">

                    <!-- Dashboard Overview -->
                    <div id="dashboard" class="tab-content active">
                        <div class="dashboard-header">
                            <h3>Dashboard Overview</h3>
                            <p>Welcome back, {{ Auth::guard('customer')->user()->name }}!</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="dashboard-card">
                                    <div class="card-icon">
                                        <i class="lni lni-shopping-basket"></i>
                                    </div>
                                    <div class="card-content">
                                        <h4>Total Orders</h4>
                                        <span class="count">10</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="dashboard-card">
                                    <div class="card-icon">
                                        <i class="lni lni-timer"></i>
                                    </div>
                                    <div class="card-content">
                                        <h4>Pending Orders</h4>
                                        <span class="count">3</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="dashboard-card">
                                    <div class="card-icon">
                                        <i class="lni lni-star-filled"></i>
                                    </div>
                                    <div class="card-content">
                                        <h4>Wishlist Items</h4>
                                        <span class="count">8</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="recent-orders">
                            <h4>Recent Orders</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Items</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#ORD-001</td>
                                            <td>2024-01-15</td>
                                            <td>3 Items</td>
                                            <td>$245.00</td>
                                            <td><span class="status delivered">Delivered</span></td>
                                            <td><a href="#" class="btn-view">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>#ORD-002</td>
                                            <td>2024-01-12</td>
                                            <td>2 Items</td>
                                            <td>$120.50</td>
                                            <td><span class="status shipping">Shipping</span></td>
                                            <td><a href="#" class="btn-view">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Profile -->
                    <div id="profile" class="tab-content">
                        <div class="dashboard-header">
                            <h3>Edit Profile</h3>
                            <p>Update your personal information</p>
                        </div>

                        <form class="dashboard-form">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::guard('customer')->user()->name ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" value="Doe">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" value="{{ Auth::guard('customer')->user()->email ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" value="+1 234 567 8900">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Bio</label>
                                        <textarea class="form-control" rows="4" placeholder="Tell us about yourself..."></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Order History -->
                    <div id="orders" class="tab-content">
                        <div class="dashboard-header">
                            <h3>Order History</h3>
                            <p>Your recent orders and their status</p>
                        </div>

                        <div class="orders-list">
                            <div class="single-order">
                                <div class="order-header">
                                    <div class="order-info">
                                        <h5>Order #ORD-001</h5>
                                        <span>Placed on January 15, 2024</span>
                                    </div>
                                    <div class="order-status">
                                        <span class="status delivered">Delivered</span>
                                        <span class="order-total">$245.00</span>
                                    </div>
                                </div>
                                <div class="order-items">
                                    <div class="item">
                                        <img src="/assets/images/products/product1.jpg" alt="Product">
                                        <div class="item-info">
                                            <h6>Wireless Bluetooth Headphones</h6>
                                            <span>Qty: 1</span>
                                        </div>
                                        <span class="item-price">$99.00</span>
                                    </div>
                                    <div class="item">
                                        <img src="/assets/images/products/product2.jpg" alt="Product">
                                        <div class="item-info">
                                            <h6>Smart Watch Series 5</h6>
                                            <span>Qty: 2</span>
                                        </div>
                                        <span class="item-price">$146.00</span>
                                    </div>
                                </div>
                                <div class="order-actions">
                                    <button class="btn">View Details</button>
                                    <button class="btn btn-secondary">Reorder</button>
                                </div>
                            </div>

                            <div class="single-order">
                                <div class="order-header">
                                    <div class="order-info">
                                        <h5>Order #ORD-002</h5>
                                        <span>Placed on January 12, 2024</span>
                                    </div>
                                    <div class="order-status">
                                        <span class="status shipping">Shipping</span>
                                        <span class="order-total">$120.50</span>
                                    </div>
                                </div>
                                <div class="order-items">
                                    <div class="item">
                                        <img src="/assets/images/products/product3.jpg" alt="Product">
                                        <div class="item-info">
                                            <h6>Laptop Backpack</h6>
                                            <span>Qty: 1</span>
                                        </div>
                                        <span class="item-price">$45.50</span>
                                    </div>
                                    <div class="item">
                                        <img src="/assets/images/products/product4.jpg" alt="Product">
                                        <div class="item-info">
                                            <h6>USB-C Charging Cable</h6>
                                            <span>Qty: 3</span>
                                        </div>
                                        <span class="item-price">$75.00</span>
                                    </div>
                                </div>
                                <div class="order-actions">
                                    <button class="btn">Track Order</button>
                                    <button class="btn btn-secondary">Cancel Order</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Methods -->
                    <div id="payments" class="tab-content">
                        <div class="dashboard-header">
                            <h3>Payment Methods</h3>
                            <p>Manage your payment options</p>
                        </div>

                        <div class="payment-methods">
                            <div class="saved-cards">
                                <h5>Saved Cards</h5>
                                <div class="card-list">
                                    <div class="payment-card">
                                        <div class="card-info">
                                            <i class="lni lni-credit-cards"></i>
                                            <div class="card-details">
                                                <h6>Visa ending in 4242</h6>
                                                <span>Expires 12/2025</span>
                                            </div>
                                        </div>
                                        <div class="card-actions">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Delete</button>
                                        </div>
                                    </div>

                                    <div class="payment-card">
                                        <div class="card-info">
                                            <i class="lni lni-credit-cards"></i>
                                            <div class="card-details">
                                                <h6>MasterCard ending in 8888</h6>
                                                <span>Expires 08/2026</span>
                                            </div>
                                        </div>
                                        <div class="card-actions">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="add-new-card">
                                <h5>Add New Card</h5>
                                <form class="card-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Card Number</label>
                                                <input type="text" class="form-control" placeholder="1234 5678 9012 3456">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Expiry Date</label>
                                                <input type="text" class="form-control" placeholder="MM/YY">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>CVV</label>
                                                <input type="text" class="form-control" placeholder="123">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="default-card">
                                                <label class="form-check-label" for="default-card">Set as default payment method</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn">Add Card</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Saved Addresses -->
                    <div id="addresses" class="tab-content">
                        <div class="dashboard-header">
                            <h3>Saved Addresses</h3>
                            <p>Manage your delivery addresses</p>
                        </div>

                        <div class="addresses-list">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="address-card default">
                                        <div class="address-header">
                                            <h6>Home Address</h6>
                                            <span class="default-badge">Default</span>
                                        </div>
                                        <div class="address-details">
                                            <p>John Doe</p>
                                            <p>123 Main Street, Apt 4B</p>
                                            <p>New York, NY 10001</p>
                                            <p>United States</p>
                                            <p>Phone: +1 234 567 8900</p>
                                        </div>
                                        <div class="address-actions">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Delete</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="address-card">
                                        <div class="address-header">
                                            <h6>Office Address</h6>
                                        </div>
                                        <div class="address-details">
                                            <p>John Doe</p>
                                            <p>456 Business Ave, Floor 10</p>
                                            <p>New York, NY 10002</p>
                                            <p>United States</p>
                                            <p>Phone: +1 234 567 8901</p>
                                        </div>
                                        <div class="address-actions">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Delete</button>
                                            <button class="btn-set-default">Set as Default</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="add-new-address">
                                <h5>Add New Address</h5>
                                <form class="address-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" placeholder="John Doe">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="tel" class="form-control" placeholder="+1 234 567 8900">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <input type="text" class="form-control" placeholder="Street address">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" placeholder="Apartment, suite, etc.">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="New York">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>ZIP Code</label>
                                                <input type="text" class="form-control" placeholder="10001">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="set-default">
                                                <label class="form-check-label" for="set-default">Set as default address</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn">Save Address</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Terms & Policy -->
                    <div id="terms" class="tab-content">
                        <div class="dashboard-header">
                            <h3>Terms & Policy</h3>
                            <p>Our terms of service and privacy policy</p>
                        </div>

                        <div class="terms-content">
                            <div class="terms-section">
                                <h5>Terms of Service</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>

                            <div class="terms-section">
                                <h5>Privacy Policy</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>

                            <div class="terms-section">
                                <h5>Return Policy</h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Help Center -->
                    <div id="help" class="tab-content">
                        <div class="dashboard-header">
                            <h3>Help Center</h3>
                            <p>Get help with your account and orders</p>
                        </div>

                        <div class="help-content">
                            <div class="faq-section">
                                <h5>Frequently Asked Questions</h5>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h6>How can I track my order?</h6>
                                        <i class="lni lni-chevron-down"></i>
                                    </div>
                                    <div class="faq-answer">
                                        <p>You can track your order by logging into your account and visiting the "Order History" section. You'll find tracking information for all your recent orders.</p>
                                    </div>
                                </div>

                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h6>What is your return policy?</h6>
                                        <i class="lni lni-chevron-down"></i>
                                    </div>
                                    <div class="faq-answer">
                                        <p>We accept returns within 30 days of purchase. Items must be in original condition with tags attached. Please visit our Returns page for detailed instructions.</p>
                                    </div>
                                </div>

                                <div class="faq-item">
                                    <div class="faq-question">
                                        <h6>How do I update my payment information?</h6>
                                        <i class="lni lni-chevron-down"></i>
                                    </div>
                                    <div class="faq-answer">
                                        <p>You can update your payment methods in the "Payment Methods" section of your account dashboard. Here you can add, edit, or remove credit/debit cards.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-support">
                                <h5>Contact Support</h5>
                                <form class="support-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" placeholder="Enter subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Order Number (if applicable)</label>
                                                <input type="text" class="form-control" placeholder="Order #">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea class="form-control" rows="5" placeholder="Describe your issue..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dashboard Area -->

<style>
.dashboard-sidebar {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
}

.dashboard-user-profile {
    text-align: center;
    padding-bottom: 20px;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 20px;
}

.user-avatar img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}

.user-info h4 {
    margin-bottom: 5px;
    font-size: 18px;
}

.user-info p {
    color: #6c757d;
    font-size: 14px;
}

.dashboard-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.dashboard-menu li {
    margin-bottom: 10px;
}

.dashboard-menu a {
    display: flex;
    align-items: center;
    padding: 12px 15px;
    color: #495057;
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.dashboard-menu a:hover,
.dashboard-menu a.active {
    background: #007bff;
    color: white;
}

.dashboard-menu i {
    margin-right: 10px;
    font-size: 16px;
}

.logout-btn {
    background: none;
    border: none;
    color: #495057;
    text-align: left;
    width: 100%;
    padding: 12px 15px;
    cursor: pointer;
}

.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
}

.dashboard-header {
    margin-bottom: 30px;
}

.dashboard-header h3 {
    margin-bottom: 5px;
}

.dashboard-card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.card-icon {
    font-size: 40px;
    color: #007bff;
    margin-bottom: 15px;
}

.card-content h4 {
    font-size: 14px;
    color: #6c757d;
    margin-bottom: 5px;
}

.card-content .count {
    font-size: 32px;
    font-weight: bold;
    color: #495057;
}

.recent-orders {
    background: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.status {
    padding: 5px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: bold;
}

.status.delivered {
    background: #d4edda;
    color: #155724;
}

.status.shipping {
    background: #fff3cd;
    color: #856404;
}

.btn-view {
    color: #007bff;
    text-decoration: none;
}

.dashboard-form,
.card-form,
.address-form,
.support-form {
    background: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.single-order {
    background: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.order-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.order-items .item {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #dee2e6;
}

.order-items .item img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 15px;
}

.item-info {
    flex: 1;
}

.order-actions {
    margin-top: 15px;
    text-align: right;
}

.payment-card,
.address-card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.address-card.default {
    border: 2px solid #007bff;
}

.default-badge {
    background: #007bff;
    color: white;
    padding: 3px 8px;
    border-radius: 10px;
    font-size: 12px;
}

.terms-section,
.faq-item {
    background: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}

.faq-answer {
    display: none;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #dee2e6;
}

.btn {
    background: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

.btn-secondary {
    background: #6c757d;
}

.btn-edit, .btn-delete, .btn-set-default {
    background: none;
    border: 1px solid #dee2e6;
    padding: 5px 10px;
    border-radius: 3px;
    margin-left: 5px;
    cursor: pointer;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab switching functionality
    const tabLinks = document.querySelectorAll('.dashboard-menu a[data-tab]');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Remove active class from all links and contents
            tabLinks.forEach(l => l.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));

            // Add active class to clicked link
            this.classList.add('active');

            // Show corresponding content
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });

    // FAQ toggle functionality
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector('i');

            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                icon.classList.remove('lni-chevron-up');
                icon.classList.add('lni-chevron-down');
            } else {
                answer.style.display = 'block';
                icon.classList.remove('lni-chevron-down');
                icon.classList.add('lni-chevron-up');
            }
        });
    });
});
</script>

@endsection
