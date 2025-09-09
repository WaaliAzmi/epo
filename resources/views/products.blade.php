@extends('layouts.user')

@section('title', 'Available Kits')

@section('content')
<h2 class="text-3xl font-bold mb-6 text-green-400">Available Kits for Farming</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
    @foreach($products as $product)
        <div class="bg-[#0E2A31] rounded-2xl shadow-md overflow-hidden border hover:shadow-lg transition duration-300">
    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
             class="w-full h-48 object-cover">
    @else
        <img src="{{ asset('images/placeholder.jpg') }}" alt="No Image"
             class="w-full h-48 object-cover">
    @endif
    <div class="p-6">
        <h3 class="text-xl font-semibold text-green-400 mb-2">{{ $product->name }}</h3>
        <p class="text-gray-300 text-sm mb-4">
            {{ Str::limit($product->description, 100, '...') }}
        </p>
        <div class="flex justify-between items-center mb-4">
            <span class="text-green-500 font-bold text-lg">${{ number_format($product->price, 2) }}</span>
            <a href="#" class="text-sm text-blue-400 hover:underline">View Details</a>
        </div>
        <!-- Add to Cart Button -->
        <form method="POST" action="{{ route('cart.store', $product->id) }}">
            @csrf
            <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-xl transition duration-200">
                Add to Cart
            </button>
        </form>
    </div>
</div>

    @endforeach
</div>
@endsection
