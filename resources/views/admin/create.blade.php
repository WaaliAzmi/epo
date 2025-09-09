@extends('layouts.admin')

@section('content')
<h2 class="text-xl font-bold mb-4">Add Product</h2>

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Product Name" required class="w-full p-2 border rounded">
    
    <textarea name="description" placeholder="Description" required class="w-full p-2 border rounded"></textarea>
    
    <input type="number" name="price" placeholder="Price" step="0.01" required class="w-full p-2 border rounded">
    
    <input type="number" name="stock" placeholder="Stock" required class="w-full p-2 border rounded">

    <input type="file" name="image" accept="image/*" class="w-full p-2 border rounded">

    <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800 transition">
        Add Product
    </button>
</form>
@endsection
