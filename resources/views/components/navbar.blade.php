@php
    $cartItems = session('cart', []);
    $cartCount = array_sum(array_column($cartItems, 'quantity'));
    $cartTotal = 0;
    foreach ($cartItems as $item) {
        $cartTotal += $item['quantity'] * $item['price'];
    }
@endphp

<nav class="bg-[#0E2A31] px-8 py-4">
  <div class="flex items-center justify-between gap-8">
    <!-- Logo Section -->
    <div class="flex items-center gap-4">
      <img src="{{ asset('storage/image.png') }}" alt="Logo" class="w-12 h-12" />
      <div>
        <h1 class="text-xl font-bold text-white">EPO</h1>
        <p class="text-green-400 text-sm">Environmental Productivity</p>
      </div>
    </div>

    <!-- Desktop Links -->
    <ul class="hidden md:flex gap-8 text-gray-300 text-lg items-center">
      <li><a href="{{ route('welcome.view') }}#services">Services</a></li>
      <li><a href="{{ route('welcome.view') }}#farms">Vertical Farms</a></li>
      <li><a href="{{ route('welcome.view') }}#produce">Fresh Produce</a></li>
      <li><a href="{{ route('welcome.view') }}#trading">Carbon Trading</a></li>
      <li><a href="{{ route('welcome.view') }}#solutions">Solutions</a></li>

    </ul>

    <!-- Desktop Buttons -->
    <div class="hidden md:flex items-center gap-4">
      
      @auth
  <!-- Profile Icon -->
  <a href="{{ route('user.profile') }}" class="relative">
    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" 
         alt="Profile" 
         class="w-10 h-10 rounded-full border-2 border-white hover:border-green-400 transition duration-300" />
  </a>
@else
  <a href="{{ route('signup.form') }}" class="bg-green-400 text-white px-6 py-2 rounded-full font-semibold">
    Sign Up
  </a>
@endauth


      @auth
      <!-- Cart Dropdown -->
      <div class="relative">
        <button id="cart-toggle" class="text-white hover:text-green-400 relative">
          🛒
          @if($cartCount > 0)
            <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
          @endif
        </button>
        <div id="cart-dropdown" class="hidden absolute right-0 mt-2 w-64 bg-white text-black rounded shadow-lg z-50">
          <div class="p-4 max-h-60 overflow-y-auto">
            <h4 class="font-semibold text-lg mb-2">Your Cart</h4>
            @forelse($cartItems as $item)
              <div class="text-sm mb-1">• {{ $item['name'] }} x{{ $item['quantity'] }}</div>
            @empty
              <div class="text-sm text-gray-500">Your cart is empty.</div>
            @endforelse
            @if($cartCount > 0)
              <div class="text-sm font-bold mt-2">Total: ${{ $cartTotal }}</div>
              <a href="{{ route('cart.view') }}" class="mt-3 inline-block bg-green-500 text-white px-4 py-2 rounded text-center w-full">
                Go to Cart
              </a>
            @endif
          </div>
        </div>
      </div>

      <!-- Logout -->
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-sm text-gray-400 hover:text-white ml-2">
          Logout
        </button>
      </form>
      @endauth
    </div>

    <!-- Mobile Hamburger -->
    <button class="md:hidden text-gray-300 focus:outline-none" id="menu-toggle">
      ☰
    </button>
  </div>

  <!-- Mobile Menu -->
  <ul id="mobile-menu" class="md:hidden hidden flex-col gap-4 mt-4 text-gray-300 text-base">
    <li><a href="{{ route('welcome.view') }}#services">Services</a></li>
    <li><a href="{{ route('welcome.view') }}#farms">Vertical Farms</a></li>
    <li><a href="{{ route('welcome.view') }}#produce">Fresh Produce</a></li>
    <li><a href="{{ route('welcome.view') }}#trading">Carbon Trading</a></li>
    <li><a href="{{ route('welcome.view') }}#solutions">Solutions</a></li>

    <li>
      <a href="{{ route('signup.form') }}" class="block bg-green-400 text-white px-4 py-2 rounded-full text-center font-semibold mt-2">
        Sign Up
      </a>
    </li>

    @auth
    <li class="text-white relative">
      <button id="cart-toggle-mobile" class="relative">
        🛒
        @if($cartCount > 0)
          <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
        @endif
      </button>
    </li>

    <li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full text-left text-sm text-gray-400 hover:text-white">
          Logout
        </button>
      </form>
    </li>
    @endauth
  </ul>
</nav>

<!-- Cart Dropdown Scripts -->
<script>
  document.getElementById('menu-toggle').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });

  const cartToggle = document.getElementById('cart-toggle');
  const cartDropdown = document.getElementById('cart-dropdown');
  if (cartToggle && cartDropdown) {
    cartToggle.addEventListener('click', () => {
      cartDropdown.classList.toggle('hidden');
    });
  }
</script>
