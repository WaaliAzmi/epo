@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-md mx-auto">
    <h2 class="text-lg font-semibold mb-4">Add New User</h2>
    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" class="w-full border p-2 mb-2" required>
        <input type="email" name="email" placeholder="Email" class="w-full border p-2 mb-2" required>
        <input type="password" name="password" placeholder="Password" class="w-full border p-2 mb-2" required>
        <input type="text" name="role" placeholder="Role" class="w-full border p-2 mb-2" required>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
