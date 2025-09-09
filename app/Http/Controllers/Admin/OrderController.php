<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')
                         ->with('success', 'Order deleted successfully.');
    }

    /**
     * API: List all orders (JSON response)
     */
    public function apiIndex()
    {
        $orders = Order::with('items')->get();
        return response()->json(['orders' => $orders]);
    }

    /**
     * API: Show a single order (JSON response)
     */
    public function apiShow($id)
    {
        $order = Order::with('items')->findOrFail($id);
        return response()->json(['order' => $order]);
    }

    /**
     * API: List only authenticated user's orders (JSON response)
     */
    public function apiUserOrders()
    {
        $userId = auth()->id();
        $orders = Order::with('items')->where('user_id', $userId)->get();
        return response()->json(['orders' => $orders]);
    }
}
