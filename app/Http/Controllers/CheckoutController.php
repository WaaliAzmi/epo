<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
        $cart = session('cart', []);
        $total = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        return view('checkout', compact('cart', 'total'));
    }

    public function confirmOrder(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'payment_method' => 'required|in:cod,card',
            'address' => 'required',
        ]);

        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('checkout')->with('error', 'Cart is empty!');
        }

        $total = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        $order = Order::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'payment_method' => $request->payment_method,
            'address' => $request->address,
            'total' => $total,
        ]);

        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'] ?? null,
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        session()->forget('cart');

        // Use flash message to trigger popup on the same page
        return redirect()->route('checkout')->with('order_success', 'Your order has been placed successfully!');
    }

    /**
     * API: Confirm order (JSON response for Flutter)
     */
    public function apiCheckout(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'payment_method' => 'required|in:cod,card',
            'address' => 'required',
            'cart' => 'required|array|min:1',
        ]);
        $cart = $request->cart;
        $total = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $order = Order::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'payment_method' => $request->payment_method,
            'address' => $request->address,
            'total' => $total,
        ]);
        foreach ($cart as $item) {
            \App\Models\OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'] ?? null,
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }
        session()->forget('cart');
        return response()->json(['success' => true, 'order_id' => $order->id]);
    }
}
