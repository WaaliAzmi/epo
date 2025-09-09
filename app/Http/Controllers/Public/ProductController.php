<?php
namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Homepage with 6 products
    public function index()
    {
        $products = Product::take(6)->get();
        return view('welcome', compact('products'));
    }

    // Full product listing
    public function all()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
}
