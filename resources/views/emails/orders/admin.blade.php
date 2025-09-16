@component('mail::message')
# New Order Received

An order has been placed on **MarketNest**.

### Customer Details:
- **Name:** {{ $order->name }}
- **Email:** {{ $order->email }}
- **Phone:** {{ $order->phone }}
- **Address:** {{ $order->address }}, {{ $order->city }}, {{ $order->state }} - {{ $order->pincode }}

### Order Summary
@component('mail::table')
| Product | Qty | Price | Total |
|---------|-----|-------|-------|
@foreach ($order->items as $item)
| {{ $item->name }} | {{ $item->quantity }} | ₹{{ number_format($item->price, 2) }} | ₹{{ number_format($item->total, 2) }} |
@endforeach
@endcomponent

**Grand Total:** ₹{{ number_format($order->total, 2) }}

@component('mail::button', ['url' => route('admin.orders.show', $order->id)])
View Order in Dashboard
@endcomponent

Thanks,
**Tech Store**
@endcomponent
