@extends('layouts.user') <!-- Or whatever your main layout is -->

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Add Carbon Activity</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('carbon.store') }}">
        @csrf

        <div class="mb-4">
            <label for="activity_type" class="block font-semibold">Activity Type</label>
            <select name="activity_type" id="activity_type" required class="w-full border rounded p-2">
                <option value="">Select</option>
                <option value="tree_planting">Tree Planting</option>
                <option value="electricity">Electricity</option>
                <option value="transportation">Transportation</option>
                <option value="shipping">Shipping</option>
                <option value="solar_installation">Solar Installation</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="quantity" class="block font-semibold">Quantity</label>
            <input type="number" name="quantity" id="quantity" step="0.01" min="0.01" required class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label for="unit" class="block font-semibold">Unit</label>
            <input type="text" name="unit" id="unit" required class="w-full border rounded p-2" placeholder="e.g., trees, kWh, liters">
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Submit
        </button>
    </form>
</div>
@endsection
