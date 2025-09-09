@extends('layouts.user')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-[#0E2A31] shadow-md rounded-lg mt-10 text-white">
    <h2 class="text-xl font-bold mb-4">Checkout</h2>

    <form action="{{ route('confirm.order') }}" method="POST">
        @csrf

        <!-- Show cart items -->
        <div class="mb-4">
            @foreach ($cart as $item)
                <div class="mb-2">
                    <strong>{{ $item['name'] }}</strong> x {{ $item['quantity'] }} - ${{ $item['price'] * $item['quantity'] }}
                </div>
            @endforeach
            <p class="mt-4 font-semibold">Total: ${{ $total }}</p>
        </div>

        <!-- User Details -->
        <input type="text" name="name" class="w-full border p-2 mb-2" placeholder="Your Name" required>
        <input type="text" name="phone" class="w-full border p-2 mb-2" placeholder="Phone Number" required>
        <input type="email" name="email" class="w-full border p-2 mb-4" placeholder="Email Address" required>
        <input type="text" name="address" class="w-full border p-2 mb-4" placeholder="Shipping Address" required>

        <!-- Payment Method -->
        <div class="mb-4">
            <label><input type="radio" name="payment_method" value="cod" checked> Cash on Delivery</label>
            <label class="ml-4"><input type="radio" name="payment_method" value="card"> Card</label>
        </div>

        <!-- Confirm Button -->
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">Confirm Order</button>
    </form>

    <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('order_success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Thank you!',
            text: "{{ session('order_success') }}",
            confirmButtonColor: '#3085d6'
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops!',
            text: "{{ session('error') }}",
            confirmButtonColor: '#d33'
        });
    </script>
@endif


</div>
@endsection
