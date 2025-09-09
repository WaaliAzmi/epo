<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EPO Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

@include('components.navbar')

<!-- Login Form -->
<section class="flex items-center justify-center py-16 px-4">
  <form method="POST" action="{{ route('login.submit') }}" class="w-full max-w-md bg-gray-800 p-8 rounded-xl shadow-xl">
    @csrf
    <h2 class="text-2xl font-bold mb-6 text-center text-green-400">Login</h2>

    @if (session('status'))
      <div class="bg-green-500 text-white p-2 rounded mb-4">
        {{ session('status') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="bg-red-500 text-white p-2 rounded mb-4">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <label class="block mb-4">
      <span class="text-gray-300">Email</span>
      <input type="email" name="email" value="{{ old('email') }}" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
    </label>

    <label class="block mb-4">
      <span class="text-gray-300">Password</span>
      <input type="password" name="password" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
    </label>

    <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-md font-semibold hover:bg-green-600">Login</button>

    <p class="mt-3 text-center">
      <a href="{{ route('password.request') }}" class="text-sm text-blue-400 hover:underline">Forgot your password?</a>
    </p>

    <p class="mt-4 text-center text-sm text-gray-400">
      Don't have an account? <a href="{{ route('signup.form') }}" class="text-green-400 hover:underline">Sign up here</a>
    </p>
  </form>
</section>

<!-- Footer -->
@include('components.footer')

</body>
</html>
