<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Add a product to the cart.
     */
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'id'       => $product->id,   
                'name'     => $product->name,
                'price'    => $product->price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', "{$product->name} added to cart!");
    }

    /**
     * View the cart page.
     */
    public function view()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart.index', compact('cart', 'total'));
    }

    /**
     * Remove a product from the cart.
     */
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removed from cart.');
    }

    /**
     * Decrease quantity of an item in the cart.
     */
    public function decrement($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity'] -= 1;
            } else {
                unset($cart[$id]); // Remove if quantity is 1
            }

            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Cart updated.');
    }

    /**
     * Clear the entire cart.
     */
    public function clear()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart cleared.');
    }

    /**
     * API: Add a product to the cart (JSON response)
     */
    public function apiAdd(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'nullable|integer|min:1',
        ]);
        $id = $request->product_id;
        $quantity = $request->quantity ?? 1;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'id'       => $product->id,
                'name'     => $product->name,
                'price'    => $product->price,
                'quantity' => $quantity
            ];
        }
        session()->put('cart', $cart);
        return response()->json(['success' => true, 'cart' => array_values($cart)]);
    }

    /**
     * API: View the cart (JSON response)
     */
    public function apiView()
    {
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return response()->json(['cart' => array_values($cart), 'total' => $total]);
    }

    /**
     * API: Remove a product from the cart (JSON response)
     */
    public function apiRemove(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
        ]);
        $id = $request->product_id;
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return response()->json(['success' => true, 'cart' => array_values($cart)]);
    }

    /**
     * API: Decrease quantity of an item in the cart (JSON response)
     */
    public function apiDecrement(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
        ]);
        $id = $request->product_id;
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity'] -= 1;
            } else {
                unset($cart[$id]);
            }
            session()->put('cart', $cart);
        }
        return response()->json(['success' => true, 'cart' => array_values($cart)]);
    }

    /**
     * API: Clear the entire cart (JSON response)
     */
    public function apiClear()
    {
        session()->forget('cart');
        return response()->json(['success' => true, 'cart' => []]);
    }
}
