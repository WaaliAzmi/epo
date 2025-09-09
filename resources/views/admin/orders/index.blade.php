@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Orders</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Customer</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">Phone</th>
                <th class="py-2 px-4">Payment</th>
                <th class="py-2 px-4">Total</th>
                <th class="py-2 px-4">Address</th>
                <th class="py-2 px-4">Items</th>
                <th class="py-2 px-4">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-2 px-4">{{ $order->id }}</td>
                    <td class="py-2 px-4">{{ $order->name }}</td>
                    <td class="py-2 px-4">{{ $order->email }}</td>
                    <td class="py-2 px-4">{{ $order->phone }}</td>
                    <td class="py-2 px-4 capitalize">{{ $order->payment_method }}</td>
                    <td class="py-2 px-4">${{ $order->total }}</td>
                    <td class="py-2 px-4">{{ $order->address }}</td>
                    <td class="py-2 px-4">
                        <ul class="text-left list-disc pl-4">
                            @foreach ($order->items as $item)
                                <li>{{ $item->product_name }} x {{ $item->quantity }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="py-2 px-4">
                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-800">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center py-4">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
