<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Mail\OrderPlacedUserMail;
use App\Mail\OrderPlacedAdminMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    // Show all order items
    public function index()
    {
        $orderItems = OrderItem::with('order')->latest()->get();
        return view('admin.orders.view', compact('orderItems'));
    }

    // Show all orders with count of items
    public function view()
    {
        $orders = Order::withCount('orderItems')->latest()->get();
        return view('admin.orders.view-details', compact('orders'));
    }


    public function store(Request $request)
    {
        $cart = session('cart', []);
        if (!$cart || count($cart) == 0) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            'pincode' => 'required|digits:6',
            'address' => 'required|string',
            'landmark' => 'nullable|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'email' => 'required|email', // ✅ make sure email is validated
        ]);

        $grandTotal = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

        // Create Order
        $order = Order::create([
            'user_id' => auth()->id() ?? null,
            'name' => $request->name,
            'phone' => $request->phone,
            'pincode' => $request->pincode,
            'address' => $request->address,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'total' => $grandTotal,
            'status' => 'pending',
        ]);

        // Add Order Items
        foreach ($cart as $id => $item) {
            $order->items()->create([
                'product_id' => $id,
                'name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total' => $item['price'] * $item['quantity'],
            ]);
        }

        // ✅ Send Emails
        try {
            // To user
            Mail::to($request->email)->send(new OrderPlacedUserMail($order));

            // To admin
            Mail::to("admin@marketnest.com")->send(new OrderPlacedAdminMail($order));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        session()->forget('cart');

        return redirect()->route('orders.success', $order->id)
            ->with('success', 'Order placed successfully! A confirmation email has been sent.');
    }

    public function success($id)
    {
        $order = Order::with('items')->findOrFail($id);
        return view('success', compact('order'));
    }
}
