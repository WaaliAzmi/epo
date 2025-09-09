@extends('layouts.user')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-900 px-4">
    <div class="w-full max-w-lg bg-gray-800 p-8 rounded-lg shadow-md text-white">
        <h2 class="text-2xl font-bold mb-6 text-center">Buy Carbon Credits</h2>

        @if(session('success'))
            <div class="bg-green-600 text-white px-4 py-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-600 text-white px-4 py-2 mb-4 rounded">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('credits.buy.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block font-medium mb-1">Full Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded text-white" required>
            </div>

            <div>
                <label for="email" class="block font-medium mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded text-white" required>
            </div>

            <div>
                <label for="phone" class="block font-medium mb-1">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded text-white" required>
            </div>

            <div>
                <label for="credits" class="block font-medium mb-1">Number of Credits</label>
                <input type="number" name="credits" id="credits" value="{{ old('credits') }}"
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded text-white" min="1" required>
            </div>

            <div>
                <label for="organization" class="block font-medium mb-1">Organization Name</label>
                <input type="text" name="organization" id="organization" value="{{ old('organization') }}"
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded text-white">
            </div>

            <div>
                <label for="reason" class="block font-medium mb-1">Reason for Purchase</label>
                <textarea name="reason" id="reason" rows="3"
                          class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded text-white" required>{{ old('reason') }}</textarea>
            </div>

            <div>
                <label for="verification_image" class="block font-medium mb-1">Upload Verification Image</label>
                <input type="file" name="verification_image" id="verification_image"
                       class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded text-white" accept="image/*">
            </div>

            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 transition font-semibold py-2 rounded text-white">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection
