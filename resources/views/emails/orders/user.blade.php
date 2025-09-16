@component('mail::message')
# Hello {{ $order->name }},

Thank you for shopping with **Tech Store** 🎉
Your order has been placed successfully.

### Order Summary
@component('mail::table')
| Product | Qty | Price | Total |
|---------|-----|-------|-------|
@foreach ($order->items as $item)
| {{ $item->name }} | {{ $item->quantity }} | ₹{{ number_format($item->price, 2) }} | ₹{{ number_format($item->total, 2) }} |
@endforeach
@endcomponent

**Grand Total:** ₹{{ number_format($order->total, 2) }}

We will notify you once your order is shipped.

@component('mail::button', ['url' => route('orders.success', $order->id)])
View Order
@endcomponent

Thanks,
**Team Tech Store**
@endcomponent
