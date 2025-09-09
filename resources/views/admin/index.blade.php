@extends('layouts.admin') {{-- Use your correct layout here --}}

@section('content')
<h2 class="text-2xl font-bold mb-6">Product List</h2>

<a href="{{ route('admin.products.create') }}"
   class="mb-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
   ➕ Add New Product
</a>

<table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
    <thead class="bg-gray-100">
        <tr class="text-left">
            <th class="p-3">Image</th>
            <th class="p-3">Name</th>
            <th class="p-3">Description</th>
            <th class="p-3">Price</th>
            <th class="p-3">Stock</th>
            <th class="p-3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
        <tr class="border-b hover:bg-gray-50 align-top">
            <td class="p-3">
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                     class="w-20 h-20 object-cover rounded border">
                @else
                <span class="text-gray-400 italic">No Image</span>
                @endif
            </td>
            <td class="p-3 font-semibold">{{ $product->name }}</td>
            <td class="p-3">{{ Str::limit($product->description, 50) }}</td>
            <td class="p-3">${{ number_format($product->price, 2) }}</td>
            <td class="p-3">{{ $product->stock }}</td>
            <td class="p-3">
                <div class="flex flex-col sm:flex-row sm:items-center gap-2">
                    <a href="{{ route('admin.products.edit', $product->id) }}"
                       class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">Edit</a>

                    <form action="{{ route('admin.products.destroy', $product->id) }}"
                          method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">
                            Delete
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="p-4 text-center text-gray-500">No products available.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
