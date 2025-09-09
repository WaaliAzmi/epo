@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Edit Product</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block font-medium">Product Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label for="description" class="block font-medium">Description:</label>
            <textarea name="description" id="description" class="w-full border p-2 rounded">{{ old('description', $product->description) }}</textarea>
        </div>

        <div>
            <label for="price" class="block font-medium">Price:</label>
            <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $product->price) }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label for="stock" class="block font-medium">Stock:</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" class="w-full border p-2 rounded">
        </div>

        <div>
            <label for="image" class="block font-medium">Product Image:</label>
            <input type="file" name="image" id="image" accept="image/*" class="w-full border p-2 rounded">
            @if ($product->image)
                <p class="mt-2">Current Image:</p>
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="h-32 mt-1 rounded border">
            @endif
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update Product</button>
    </form>
</div>
@endsection
