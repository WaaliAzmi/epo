@extends('layouts.user')

@section('title', 'Reset Password')

@section('content')
<section class="flex items-center justify-center py-16 px-4">
    <form method="POST" action="{{ route('password.update') }}" class="w-full max-w-md bg-gray-800 p-8 rounded-xl shadow-xl">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-center text-green-400">Reset Password</h2>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <input type="hidden" name="token" value="{{ $token }}">

        <label class="block mb-4">
            <span class="text-gray-300">Email</span>
            <input type="email" name="email" value="{{ old('email') }}" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
        </label>

        <label class="block mb-4">
            <span class="text-gray-300">New Password</span>
            <input type="password" name="password" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
        </label>

        <label class="block mb-6">
            <span class="text-gray-300">Confirm Password</span>
            <input type="password" name="password_confirmation" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
        </label>

        <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-md font-semibold hover:bg-green-600">Reset Password</button>
        
        <p class="mt-4 text-center text-sm text-gray-400">
            <a href="{{ route('login.form') }}" class="text-green-400 hover:underline">Back to Login</a>
        </p>
    </form>
</section>
@endsection
