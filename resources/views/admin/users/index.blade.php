@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">User Management</h1>

    <a href="{{ route('admin.users.create') }}" 
       class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded mb-6 inline-block">
        ➕ Add New User
    </a>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full bg-white rounded shadow text-left">
            <thead class="bg-gray-100 text-gray-700 font-semibold">
                <tr>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Role</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-800">
                @foreach($users as $user)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $user->name }}</td>
                    <td class="px-4 py-3">{{ $user->email }}</td>
                    <td class="px-4 py-3 capitalize">{{ $user->role }}</td>
                    <td class="px-4 py-3 space-x-2">
                        <a href="{{ route('admin.users.edit', $user->id) }}" 
                           class="text-blue-600 hover:underline">Edit</a>
                        
                        <form action="{{ route('admin.users.destroy', $user->id) }}" 
                              method="POST" class="inline-block"
                              onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
