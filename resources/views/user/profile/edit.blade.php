@extends('layouts.user')

@section('content')
<div class="min-h-screen bg-[#0E2A31] flex items-center justify-center py-12 px-4">
    <div class="bg-[#1E3A3A] shadow-lg rounded-2xl p-8 max-w-md w-full">
        <h2 class="text-3xl font-bold text-white mb-6 text-center">Edit Profile</h2>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded mb-4 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.profile.update') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-green-300 text-sm font-semibold mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}"
                       class="w-full px-4 py-2 rounded bg-[#274747] text-white focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            <div>
                <label class="block text-green-300 text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}"
                       class="w-full px-4 py-2 rounded bg-[#274747] text-white focus:outline-none focus:ring-2 focus:ring-green-400" required>
            </div>

            <div>
                <label class="block text-green-300 text-sm font-semibold mb-1">New Password <span class="text-gray-400 text-xs">(optional)</span></label>
                <input type="password" name="password"
                       class="w-full px-4 py-2 rounded bg-[#274747] text-white focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>

            <div>
                <label class="block text-green-300 text-sm font-semibold mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation"
                       class="w-full px-4 py-2 rounded bg-[#274747] text-white focus:outline-none focus:ring-2 focus:ring-green-400">
            </div>

            <div class="text-center">
                <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-6 rounded-full transition duration-300">
                    💾 Update Profile
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
