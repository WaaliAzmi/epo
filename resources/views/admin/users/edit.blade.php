@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-md mx-auto">
    <h2 class="text-lg font-semibold mb-4">Edit User</h2>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}" class="w-full border p-2 mb-2" required>
        <input type="email" name="email" value="{{ $user->email }}" class="w-full border p-2 mb-2" required>
        <input type="text" name="role" value="{{$user->role}}" class="w-full border p-2 mb-2" required>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
