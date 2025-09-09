@extends('layouts.admin')

@section('content')
<div class="p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold mb-4">Buy Credit Requests</h2>

    @if(session('success'))
        <div class="text-green-600 mb-4">{{ session('success') }}</div>
    @endif

    <table class="w-full table-auto border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Name</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Phone</th>
                <th class="border p-2">Credits</th>
                <th class="border p-2">Reason</th>
                <th class="border p-2">Organization</th>
                <th class="border p-2">Verification Image</th>
                <th class="border p-2">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($requests as $req)
            <tr>
                <td class="border p-2">{{ $req->name }}</td>
                <td class="border p-2">{{ $req->email }}</td>
                <td class="border p-2">{{ $req->phone }}</td>
                <td class="border p-2">{{ $req->credits }}</td>
                <td class="border p-2">{{ $req->reason }}</td>
                <td class="border p-2">{{ $req->organization }}</td>
                <td class="border p-2 text-center">
                    @if($req->verification_image)
                        <a href="{{ asset('storage/' . $req->verification_image) }}" target="_blank">
                            <img src="{{ asset('storage/' . $req->verification_image) }}" 
                                 alt="Verification Image" 
                                 class="w-16 h-16 object-cover rounded">
                        </a>
                    @else
                        <span class="text-gray-500">No image</span>
                    @endif
                </td>
                <td class="border p-2">
                    <form method="POST" action="{{ route('admin.buy.requests.destroy', $req->id) }}" onsubmit="return confirm('Are you sure?');">
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
@endsection
