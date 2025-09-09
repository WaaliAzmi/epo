@extends('layouts.user')

@section('content')
<div class="min-h-screen bg-[#0E2A31] py-12 px-4 sm:px-8 text-white">
    <div class="max-w-4xl mx-auto bg-gray-900 rounded-xl shadow-lg p-6">
        <h2 class="text-2xl font-bold text-green-400 mb-6">🛒 Your Cart</h2>

        @if(session('cart') && count(session('cart')) > 0)
            <div class="space-y-4">
                @php $total = 0; @endphp
                @foreach(session('cart') as $id => $item)
                    @php $total += $item['price'] * $item['quantity']; @endphp
                    <div class="flex justify-between items-center bg-gray-800 p-4 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold">{{ $item['name'] }}</h3>
                            <p class="text-sm text-gray-400">Price: ${{ number_format($item['price'], 2) }} × {{ $item['quantity'] }}</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="font-semibold text-green-300">${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                            <a href="{{ route('cart.remove', $id) }}" class="text-red-400 hover:underline text-sm">Remove</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 text-right">
                <h4 class="text-xl font-bold text-green-400">Total: ${{ number_format($total, 2) }}</h4>
                <a href="{{ route('checkout') }}" class="inline-block mt-4 bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition duration-300">
                Proceed to Checkout
                </a>
            </div>
        @else
            <p class="text-gray-300">Your cart is currently empty.</p>
            <a href="{{ url('/') }}" class="inline-block mt-4 bg-green-400 text-white px-5 py-2 rounded-full hover:bg-green-500 transition duration-300">
                Go Shopping
            </a>
        @endif
    </div>
</div>
@endsection
