<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPO - @yield('title', 'Page')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-[#0e1e28] to-[#08111a] text-gray-800">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main class="max-w-7xl mx-auto px-4 py-8 min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')
    @yield('scripts')

</body>
</html>
