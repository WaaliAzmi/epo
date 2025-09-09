<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EPO Signup</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Navbar -->
 @include('components.navbar')

  <!-- Signup Form -->
  <section class="flex items-center justify-center py-16 px-4">
    <form method="POST" action="{{ route('signup.register') }}" class="w-full max-w-md bg-gray-800 p-8 rounded-xl shadow-xl">
      @csrf
      <h2 class="text-2xl font-bold mb-6 text-center text-green-400">Create an Account</h2>

      @if(session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4 text-center">
          {{ session('success') }}
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
        <span class="text-gray-300">Full Name</span>
        <input type="text" name="name" value="{{ old('name') }}" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
      </label>

      <label class="block mb-4">
        <span class="text-gray-300">Email</span>
        <input type="email" name="email" value="{{ old('email') }}" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
      </label>

      <label class="block mb-4">
        <span class="text-gray-300">Password</span>
        <input type="password" name="password" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
      </label>

      <label class="block mb-4">
        <span class="text-gray-300">Confirm Password</span>
        <input type="password" name="password_confirmation" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
      </label>
        <label class="block mb-4">
        <span class="text-gray-300">Role</span>
        <select name="role" class="mt-1 w-full px-4 py-2 bg-gray-700 text-white rounded-md" required>
            <option value="">Select Role</option>
            <option value="buyer" {{ old('role') == 'buyer' ? 'selected' : '' }}>Buyer</option>
            <option value="trader" {{ old('role') == 'trader' ? 'selected' : '' }}>Trader</option>
        </select>
        </label>

      <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-md font-semibold hover:bg-green-600">Sign Up</button>

      <p class="mt-4 text-center text-sm text-gray-400">Already have an account? <a href="{{ route('login.form') }}" class="text-green-400">Login here</a></p>
    </form>
  </section>

  <!-- Footer -->
  @include('components.footer')

</body>
</html>
