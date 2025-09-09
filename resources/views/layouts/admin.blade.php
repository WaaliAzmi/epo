<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - EPO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CSS (if using Vite or CDN) --}}
    @vite('resources/css/app.css') {{-- Use this if you're using Laravel Vite --}}
    {{-- Or use CDN --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body class="bg-gray-100 min-h-screen flex">

    {{-- Sidebar --}}
    <aside class="w-64 bg-[#0E2A31] text-white min-h-screen">
        <div class="p-6 text-2xl font-bold">EPO Admin</div>
        <nav class="flex flex-col gap-2 px-4">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
            <a href="{{ route('admin.products.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Product Management</a>
            <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">User Management</a>
            <a href="{{ route('admin.orders.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Orders</a>
            <a href="{{ route('admin.reviews.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Reviews</a>
           
            <a href="{{ route('admin.carbon-credits.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Carbon Credits</a>
           <a href="{{ route('admin.buy.requests') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Buy Credits</a>
            <a href="{{ route('admin.sell.requests') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Sell Credits</a>

           
            <form action="{{ route('logout') }}" method="POST" class="px-4 mt-4">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 rounded hover:bg-red-700 bg-red-600 text-white">Logout</button>
            </form>
        </nav>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</body>
</html>
