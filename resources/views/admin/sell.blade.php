@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Sell Credit Requests</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full bg-white shadow-md rounded border border-gray-200">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="px-4 py-2">Credits</th>
                <th class="px-4 py-2">Verification Image</th>
                <th class="px-4 py-2">Contact</th>
                <th class="px-4 py-2">Bank</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($requests as $request)
                <tr class="border-t border-gray-200">
                    <td class="px-4 py-2">{{ $request->credits }}</td>
                    <td class="px-4 py-2">
                        @if($request->verification_image)
                            <img src="{{ asset('storage/' . $request->verification_image) }}" alt="Verification" class="w-16 h-16 object-cover">
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="px-4 py-2">{{ $request->contact }}</td>
                    <td class="px-4 py-2">{{ $request->bank }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('admin.sell.requests.destroy', $request->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 text-center">No sell credit requests found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
