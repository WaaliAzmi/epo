@extends('layouts.user')

@section('content')
<div class="min-h-screen bg-gray-900 px-4 py-10">

    {{-- Carbon Credit Calculator --}}
    <div class="w-full max-w-lg mx-auto bg-gray-800 p-8 rounded-lg shadow-md text-white">
        <h2 class="text-2xl font-bold mb-6 text-center">Calculate Carbon Credits</h2>

        <form id="carbonCalculatorForm">
            @csrf

            <!-- Activity Type -->
            <div class="mb-4">
                <label for="activity_type" class="block text-sm font-medium mb-2">Activity Type</label>
                <select name="activity_type" id="activity_type" required
                    class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">
                    <option value="">Select</option>
                    <option value="tree_planting">Tree Planting</option>
                    <option value="electricity">Electricity</option>
                    <option value="transportation">Transportation</option>
                    <option value="shipping">Shipping</option>
                    <option value="solar_installation">Solar Installation</option>
                </select>
            </div>

            <!-- Quantity -->
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium mb-2">Quantity</label>
                <input type="number" name="quantity" id="quantity" step="0.01" min="0.01" required
                    class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">
            </div>

            <!-- Unit -->
            <div class="mb-4">
                <label for="unit" class="block text-sm font-medium mb-2">Unit</label>
                <input type="text" name="unit" id="unit" required placeholder="e.g., trees, kWh, liters"
                    class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">
            </div>

            <!-- Calculate Button -->
            <div class="mb-4">
                <button type="button" id="calculateBtn"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                    Calculate
                </button>
            </div>

            <!-- Total Credits -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Total Credits</label>
                <input type="text" id="calculated_credits" readonly placeholder="0.000"
                    class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 text-green-400 font-bold">
            </div>
        </form>
    </div>

    {{-- Sell Credits Form --}}
    <div class="w-full max-w-lg mx-auto mt-10 bg-gray-800 p-8 rounded-lg shadow-md text-white">
        <h2 class="text-2xl font-bold mb-6 text-center">Sell Your Credits</h2>

        <form method="POST" action="{{ route('credits.sell.submit') }}" enctype="multipart/form-data">
            @csrf

            <!-- Credits to Sell -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Credits to Sell</label>
                <input type="number" id="sell_credits" name="credits" step="0.01" min="0.01" required
                    class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">
            </div>

            <!-- Upload Verification Image -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Upload EPO Verification Image</label>
                <input type="file" name="verification_image" accept="image/*" required
                    class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">
            </div>

            <!-- Contact Details -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Contact Details</label>
                <textarea name="contact" rows="3" required placeholder="Phone, Email, etc."
                    class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">{{ old('contact') }}</textarea>
            </div>

            <!-- Bank Details -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Bank Details</label>
                <textarea name="bank" rows="3" required placeholder="Bank name, IBAN, etc."
                    class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring focus:ring-green-500">{{ old('bank') }}</textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                Submit Sell Request
            </button>
        </form>
    </div>

</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('calculateBtn').addEventListener('click', function () {
            const activityType = document.getElementById('activity_type').value;
            const quantity = parseFloat(document.getElementById('quantity').value);

            if (!activityType || isNaN(quantity) || quantity <= 0) {
                alert('Please fill in all fields with valid values.');
                return;
            }

            const rates = {
                tree_planting: 0.022,
                electricity: 0.000475,
                transportation: 0.239,
                shipping: 0.08,
                solar_installation: 0.15
            };

            const rate = rates[activityType] || 0;
            const credits = (quantity * rate).toFixed(3);

            document.getElementById('calculated_credits').value = credits;
        });
    });
</script>
@endsection
