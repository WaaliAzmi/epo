@extends('layouts.admin') {{-- Use your admin layout --}}

@section('content')
<div class="max-w-7xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6">Carbon Activities</h2>

    <a href="{{ route('carbon.create') }}"
       class="mb-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        ➕ Add New Activity
    </a>

    <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden mt-4">
        <thead class="bg-gray-100">
            <tr class="text-left">
                <th class="p-3">ID</th>
                <th class="p-3">Activity Type</th>
                <th class="p-3">Quantity</th>
                <th class="p-3">Unit</th>
                <th class="p-3">Created At</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($activities as $activity)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $activity->id }}</td>
                    <td class="p-3 capitalize">{{ str_replace('_', ' ', $activity->activity_type) }}</td>
                    <td class="p-3">{{ $activity->quantity }}</td>
                    <td class="p-3">{{ $activity->unit }}</td>
                    <td class="p-3">{{ $activity->created_at->format('Y-m-d') }}</td>
                    <td class="p-3">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2">
                            <form action="{{ route('admin.carbon-credits.destroy', $activity->id) }}"
      method="POST"
      onsubmit="return confirm('Are you sure you want to delete this activity?');">
    @csrf
    @method('DELETE')
    <button type="submit"
            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">
        Delete
    </button>
</form>

                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">No carbon activities found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
