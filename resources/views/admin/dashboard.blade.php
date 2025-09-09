<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EPO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex flex-col">
            <div class="px-6 py-4 text-2xl font-bold border-b border-gray-700">
                EPO
            </div>

 <nav class="flex-1 px-4 py-6 space-y-4">
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
    <a href="{{ route('admin.products.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Product Management</a>
    <a href="{{ route('admin.users.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">User Management</a>
    <a href="{{ route('admin.orders.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Orders</a>
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Reviews</a>
    <a href="{{ route('carbon.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Carbon Credits</a>
    <a href="{{ route('admin.buy.requests') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Buy Credits</a>
     <a href="{{ route('admin.sell.requests') }}" class="block px-4 py-2 hover:bg-gray-200"> Sell Credits
    </a>
    <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Sell Credits</a>
</nav>



            <div class="px-6 py-4 border-t border-gray-700">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block text-sm text-gray-400 hover:text-white">Logout</button>
            </form>
</div>

        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 p-8 overflow-auto">
            <div class="mb-6">
                <h1 class="text-3xl font-semibold">Dashboard</h1>
                <p class="text-gray-600 mt-1">Welcome to your admin dashboard.</p>
            </div>

            <!-- Example Stats Widgets -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-2">Total Products</h2>
                    <p class="text-2xl font-bold text-green-600">128</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-2">Total Users</h2>
                    <p class="text-2xl font-bold text-blue-600">452</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-2">Pending Orders</h2>
                    <p class="text-2xl font-bold text-yellow-600">24</p>
                </div>
            </div>

            <!-- Placeholder Content Area -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-4">Recent Activity</h2>
                <p class="text-sm text-gray-600">You can display recent actions here such as new reviews, new users, or credit trades.</p>
            </div>
        </main>
    </div>

</body>
</html>
