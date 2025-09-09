@extends('layouts.user')

@section('content')
<div class="min-h-screen bg-[#0E2A31] flex items-center justify-center py-12 px-4">
    <div class="bg-[#1E3A3A] shadow-lg rounded-2xl p-8 max-w-md w-full">
        <h2 class="text-3xl font-bold text-white mb-6 text-center">Your Profile</h2>

        @if(session('success'))
            <div class="bg-green-600 text-white text-sm p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-white space-y-4">
            <p><span class="font-semibold text-green-400">Name:</span> {{ $user->name }}</p>
            <p><span class="font-semibold text-green-400">Email:</span> {{ $user->email }}</p>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('user.profile.edit') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-6 rounded-full transition duration-300">
                ✏️ Edit Profile
            </a>
        </div>
    </div>
</div>
@endsection
