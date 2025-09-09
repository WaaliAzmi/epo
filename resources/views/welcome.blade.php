<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environment Productivity organization</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

.animate-scroll {
  animation: scroll 60s linear infinite;
}
</style>

</head>
<body>
    @include('components.navbar')

    <!-- Hero Section -->
  <section class="text-center px-4 sm:px-6 py-20 relative bg-[#0E2A31]" id="services">

  <!-- Main Content -->
  <div class="relative z-10">
    <!-- Badge -->
    <div class="mb-4 mt-8 sm:mt-0 mx-auto inline-block bg-green-900 text-green-300 text-xs sm:text-sm px-3 sm:px-4 py-1 rounded-full font-medium">
      🌿 Sustainable Agriculture Revolution
    </div>

    <!-- Heading -->
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-tight mb-4 text-white">
      Growing the <span class="text-green-400">future</span><br />
      vertically
    </h1>

    <!-- Description -->
    <p class="text-gray-300 max-w-3xl mx-auto text-base sm:text-lg md:text-xl mb-8 px-2 sm:px-0">
      Revolutionary vertical farming solutions that produce 10x more food using 95% less water, while eliminating pesticides and reducing carbon footprint by 80%.
    </p>

    <!-- CTA Buttons -->
    <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6 mb-10">
      <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-full text-lg shadow-lg transition duration-300">
        Start Your Farm →
      </a>
      <a href="#" class="border-2 border-white hover:bg-white hover:text-gray-900 text-white font-semibold py-3 px-6 rounded-full text-lg transition duration-300">
        Shop Fresh Produce
      </a>
    </div>

    <!-- Stat Boxes (Visible below content on mobile, positioned on sides on sm+) -->
    <div class="flex flex-col sm:flex-row justify-center sm:justify-between items-center gap-6 sm:gap-0 sm:absolute sm:top-20 sm:w-full px-4">
      <!-- Left Stat -->
      <div class="bg-gray-800 text-white px-4 py-6 rounded-xl shadow-lg w-40 sm:ml-10">
        <p class="text-3xl font-bold text-green-400 mb-1">365</p>
        <p class="text-sm text-gray-300">Days/Year<br><span class="text-gray-400 text-xs">Production</span></p>
      </div>

      <!-- Right Stat -->
      <div class="bg-gray-800 text-white px-4 py-6 rounded-xl shadow-lg w-40 sm:mr-10">
        <p class="text-3xl font-bold text-green-400 mb-1">95%</p>
        <p class="text-sm text-gray-300">Less Water<br><span class="text-gray-400 text-xs">vs Traditional</span></p>
      </div>
    </div>
  </div>
</section>

  <section class="bg-gradient-to-b from-[#0e1e28] to-[#08111a] text-white py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div>
                <h2 class="text-4xl font-bold text-green-400">500+</h2>
                <p class="mt-2 text-lg text-gray-300">Farms Deployed</p>
            </div>
            <div>
                <h2 class="text-4xl font-bold text-green-400">2M+</h2>
                <p class="mt-2 text-lg text-gray-300">Tons CO<sub>2</sub> Saved</p>
            </div>
            <div>
                <h2 class="text-4xl font-bold text-green-400">50+</h2>
                <p class="mt-2 text-lg text-gray-300">Countries Served</p>
            </div>
        </div>

        <h2 class="text-5xl font-light">
            Complete <span class="text-green-400 font-bold">ecosystem</span>
        </h2>

        <p class="mt-6 text-xl text-gray-400">
            From farm installation to fresh produce delivery, we provide end-to-end solutions for <br>
            sustainable vertical farming success.
        </p>
    </div>
</section>

<section class="bg-[#08111a] text-white py-20" id="services">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-[#0e1e28] rounded-2xl p-8 shadow-md border border-[#1a2d3d]">
                <div class="flex justify-center mb-6">
                    <div class="bg-[#103e37] p-4 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 4h16v16H4z" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3">Farm Installation</h3>
                <p class="text-gray-400 mb-4">
                    Complete vertical farm setup from design to deployment with cutting-edge hydroponic systems.
                </p>
                <ul class="text-sm text-green-300 mb-6 space-y-2 list-disc list-inside">
                    <li>Custom Design</li>
                    <li>Professional Installation</li>
                    <li>24/7 Support</li>
                    <li>Warranty Included</li>
                </ul>
                <a href="#" class="block text-center bg-[#103e37] text-green-400 rounded-lg py-2 border border-green-500 hover:bg-green-500 hover:text-white transition">
                    Learn More
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#0e1e28] rounded-2xl p-8 shadow-md border border-[#1a2d3d]">
                <div class="flex justify-center mb-6">
                    <div class="bg-[#103e37] p-4 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 3h18M9 22V12h6v10" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3">Fresh Produce Sales</h3>
                <p class="text-gray-400 mb-4">
                    Premium organic vegetables and herbs grown in our controlled environment vertical farms.
                </p>
                <ul class="text-sm text-green-300 mb-6 space-y-2 list-disc list-inside">
                    <li>Pesticide-Free</li>
                    <li>Year-Round Supply</li>
                    <li>Local Delivery</li>
                    <li>Bulk Orders</li>
                </ul>
                <a href="#" class="block text-center bg-[#103e37] text-green-400 rounded-lg py-2 border border-green-500 hover:bg-green-500 hover:text-white transition">
                    Learn More
                </a>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#0e1e28] rounded-2xl p-8 shadow-md border border-[#1a2d3d]">
                <div class="flex justify-center mb-6">
                    <div class="bg-[#103e37] p-4 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 8v4l3 3" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3">Maintenance Services</h3>
                <p class="text-gray-400 mb-4">
                    Expert maintenance and optimization services to keep your vertical farm running at peak efficiency.
                </p>
                <ul class="text-sm text-green-300 mb-6 space-y-2 list-disc list-inside">
                    <li>Preventive Care</li>
                    <li>System Upgrades</li>
                    <li>Remote Monitoring</li>
                    <li>Emergency Support</li>
                </ul>
                <a href="#" class="block text-center bg-[#103e37] text-green-400 rounded-lg py-2 border border-green-500 hover:bg-green-500 hover:text-white transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>


<section class="bg-[#08111a] text-white py-20" id="farms">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <!-- Title -->
        <h2 class="text-4xl font-light mb-4">
            S<span class="text-white">mart</span> <span class="text-green-400 font-bold">vertical farms</span>
        </h2>
        <p class="text-gray-400 max-w-3xl mx-auto mb-16">
            Our state-of-the-art vertical farming systems combine cutting-edge technology with sustainable practices to revolutionize food production.
        </p>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <!-- Left: Growing Systems -->
            <div class="bg-[#0e1e28] rounded-xl p-6 shadow-md border border-[#1a2d3d]">
                <h3 class="text-2xl font-semibold text-left mb-6">Next-Generation Growing Systems</h3>

                @php
                    $layers = [
                        ['id' => 'L1', 'title' => 'Layer 1 - Active Growing', 'desc' => 'Leafy Greens - 28 days to harvest', 'progress' => '74%'],
                        ['id' => 'L2', 'title' => 'Layer 2 - Active Growing', 'desc' => 'Herbs - 21 days to harvest', 'progress' => '99%'],
                        ['id' => 'L3', 'title' => 'Layer 3 - Active Growing', 'desc' => 'Microgreens - 14 days to harvest', 'progress' => '73%'],
                        ['id' => 'L4', 'title' => 'Layer 4 - Active Growing', 'desc' => 'Lettuce Varieties - 35 days to harvest', 'progress' => '74%'],
                        ['id' => 'L5', 'title' => 'Layer 5 - Active Growing', 'desc' => 'Specialty Crops - 42 days to harvest', 'progress' => '83%'],
                    ];
                @endphp

                @foreach ($layers as $layer)
                    <div class="flex justify-between items-center bg-[#112430] p-4 rounded-lg mb-3">
                        <div class="flex items-center space-x-4">
                            <span class="bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-full">{{ $layer['id'] }}</span>
                            <div class="text-left">
                                <h4 class="text-sm font-semibold">{{ $layer['title'] }}</h4>
                                <p class="text-xs text-gray-400">{{ $layer['desc'] }}</p>
                            </div>
                        </div>
                        <span class="text-green-400 font-bold">{{ $layer['progress'] }}</span>
                    </div>
                @endforeach

                <!-- System Status -->
                <div class="mt-6 bg-[#112430] p-4 rounded-lg text-left text-sm text-gray-300">
                    <h4 class="font-bold text-green-400 mb-2">System Status</h4>
                    <div class="grid grid-cols-2 gap-4">
                        <div>Temperature: <span class="text-white font-semibold">22.5°C</span></div>
                        <div>Humidity: <span class="text-white font-semibold">65%</span></div>
                        <div>pH Level: <span class="text-white font-semibold">6.2</span></div>
                        <div>Nutrients: <span class="text-white font-semibold">Optimal</span></div>
                    </div>
                </div>
            </div>

            <!-- Right: Features -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @php
                    $features = [
                        ['icon' => '', 'title' => 'Hydroponic Systems', 'desc' => '95% less water usage with precision nutrient delivery', 'highlight' => '95% Water Savings'],
                        ['icon' => '', 'title' => 'LED Growing Lights', 'desc' => 'Energy-efficient full-spectrum LED technology', 'highlight' => '60% Energy Efficient'],
                        ['icon' => '', 'title' => 'Climate Control', 'desc' => 'Optimal temperature and humidity management', 'highlight' => '±1°C Precision'],
                        ['icon' => '', 'title' => 'IoT Monitoring', 'desc' => 'Real-time monitoring and automated controls', 'highlight' => '24/7 Monitoring'],
                        ['icon' => '', 'title' => 'Data Analytics', 'desc' => 'AI-powered insights for maximum yield optimization', 'highlight' => '40% Yield Increase'],
                        ['icon' => '', 'title' => 'Pest-Free Environment', 'desc' => 'Controlled environment eliminates pesticide need', 'highlight' => '100% Organic'],
                    ];
                @endphp

                @foreach ($features as $feature)
                    <div class="bg-[#0e1e28] p-5 rounded-xl border border-[#1a2d3d] text-left">
                        <div class="text-2xl mb-2">{{ $feature['icon'] }}</div>
                        <h4 class="text-lg font-semibold mb-1">{{ $feature['title'] }}</h4>
                        <p class="text-gray-400 text-sm mb-2">{{ $feature['desc'] }}</p>
                        <span class="text-green-400 font-bold text-sm">{{ $feature['highlight'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Button -->
        <div class="mt-12">
            <a href="#" class="bg-green-400 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-500 transition">
                Request Farm Installation Quote
            </a>
        </div>
    </div>
</section>

<section class="bg-gray-900 text-white py-12 px-6" id="produce">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">
            Fresh <span class="text-green-400">organic produce</span>
        </h2>
        <p class="text-gray-300 mb-8">
            Farm-fresh vegetables and herbs delivered directly from our vertical farms to your doorstep.
            100% organic, pesticide-free, and harvested daily.
        </p>

        <!-- View All Products Button -->
        <div class="flex justify-center mb-10">
            <a href="{{ url('/products') }}">

                <button class="bg-green-600 text-white hover:bg-green-700 px-6 py-3 rounded-full text-sm font-semibold shadow-md">
                    View All Products
                </button>
            </a>
        </div>

        @if(isset($products) && $products->count())
            <!-- Show only 6 Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($products->take(6) as $product)
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-left hover:shadow-green-500/30 transition duration-300">
                        <div class="flex items-center mb-2 text-green-400">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            Organic
                        </div>
                        <h3 class="text-xl font-semibold mb-1">{{ $product->name }}</h3>
                        <p class="text-gray-400 text-sm mb-2 line-clamp-3">{{ $product->description }}</p>

                        <div class="flex items-center text-yellow-400 text-sm mb-2">
                            ★ {{ $product->rating ?? '0.0' }}
                            <span class="text-gray-300 ml-1">({{ $product->reviews ?? 0 }})</span>
                        </div>

                        <div class="text-lg font-bold mb-2">
                            ${{ number_format($product->price, 2) }}
                            <span class="text-sm font-normal text-gray-400">{{ $product->unit }}</span>
                        </div>

                        <div class="mb-3">
                            @if ($product->stock)
                                <span class="text-green-400 text-sm">In Stock</span>
                            @else
                                <span class="text-red-400 text-sm">Out of Stock</span>
                            @endif
                        </div>

                        <!-- Add to Cart -->
                        <form action="{{ route('cart.store', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded {{ !$product->stock ? 'opacity-50 cursor-not-allowed' : '' }}"
                                {{ !$product->stock ? 'disabled' : '' }}>
                                Add to Cart
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-400 mt-6">No products available at the moment. Please check back later.</p>
        @endif

        <!-- Guarantee Footer -->
        <div class="bg-gray-800 mt-16 p-6 rounded-lg flex flex-col md:flex-row justify-around items-center text-center space-y-4 md:space-y-0">
            <div>
                <p class="text-green-400 font-semibold">Same Day</p>
                <p class="text-gray-400 text-sm">Orders before 2 PM</p>
            </div>
            <div>
                <p class="text-green-400 font-semibold">Free Delivery</p>
                <p class="text-gray-400 text-sm">Orders over $50</p>
            </div>
            <div>
                <p class="text-green-400 font-semibold">100% Fresh</p>
                <p class="text-gray-400 text-sm">Or money back guarantee</p>
            </div>
        </div>
    </div>
</section>


<section class="bg-gray-900 text-white py-16 px-6" id="trading">
    <div class="max-w-7xl mx-auto text-center">
        <!-- Heading -->
        <h2 class="text-4xl font-bold mb-4">Carbon <span class="text-green-400">credit trading</span></h2>
        <p class="text-gray-300 mb-12">
            Transform your environmental impact into revenue. Trade verified carbon credits and contribute to global sustainability while generating income.
        </p>

        <!-- Trading Panel + Features -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <!-- Trading Card -->
            <div class="bg-gray-800 rounded-lg p-6 shadow-md text-left">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center text-green-400 font-semibold">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7" />
                        </svg>
                        Carbon Credit Trading
                    </div>
                    <span class="text-sm text-green-400">+12.5%</span>
                </div>
                <h3 class="text-3xl font-bold mb-2">$45.5</h3>
                <p class="text-sm text-gray-400 mb-6">per carbon credit</p>

                <!-- Bar Chart Placeholder -->
                <div class="bg-gray-700 rounded h-32 mb-6">
                    <!-- Replace with actual chart component -->
                    <div class="h-full flex items-end justify-around px-2">
                        @foreach (range(1, 20) as $i)
                            <div class="w-1 bg-green-400" style="height: {{ rand(30, 100) }}%;"></div>
                        @endforeach
                    </div>
                </div>

                <!-- Trade Input -->
                <label class="block text-sm text-gray-300 mb-2">Carbon Credits to Trade</label>
                <div class="flex items-center bg-gray-700 rounded mb-4">
                    <input type="number" value="1000" class="bg-transparent text-white px-4 py-2 w-full focus:outline-none" />
                    <span class="px-3 text-gray-400">credits</span>
                </div>

                <!-- Value Summary -->
                <div class="flex justify-between text-sm text-gray-300 mb-4">
                    <span>Total Value</span>
                    <span class="font-bold text-white">$45,500</span>
                </div>
                <div class="flex justify-between text-sm text-gray-400 mb-6">
                    <span>Trading Fee (2%)</span>
                    <span>$910.00</span>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-4">
    <a href="{{ route('credits.sell') }}" class="bg-green-500 hover:bg-green-600 text-white w-full py-2 rounded text-center">Sell Credits</a>
    <a href="{{ route('credits.buy') }}" class="bg-gray-600 hover:bg-gray-500 text-white w-full py-2 rounded text-center">Buy Credits</a>
</div>

            </div>

            <!-- Features List -->
            <div class="text-left space-y-6">
                @php
                    $features = [
                        ['title' => 'Verified Carbon Credits', 'desc' => 'All credits are third-party verified and meet international standards'],
                        ['title' => 'Real-Time Trading', 'desc' => 'Access live carbon credit markets with transparent pricing'],
                        ['title' => 'Impact Tracking', 'desc' => 'Monitor your environmental impact with detailed analytics'],
                        ['title' => 'Revenue Generation', 'desc' => 'Monetize your sustainability efforts through carbon credit sales']
                    ];
                @endphp

                @foreach ($features as $feature)
                    <div class="flex items-start space-x-4">
                        <div class="text-green-400 pt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold">{{ $feature['title'] }}</h4>
                            <p class="text-sm text-gray-400">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Global Impact Stats -->
        <div class="bg-gray-800 mt-16 rounded-lg py-8 px-4 md:px-10 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <div class="text-green-400 text-2xl font-bold">2.4M</div>
                <p class="text-gray-400 text-sm mt-1">CO₂ Reduced<br>tons</p>
            </div>
            <div>
                <div class="text-green-400 text-2xl font-bold">850K</div>
                <p class="text-gray-400 text-sm mt-1">Credits Traded<br>credits</p>
            </div>
            <div>
                <div class="text-green-400 text-2xl font-bold">$38.7M</div>
                <p class="text-gray-400 text-sm mt-1">Revenue Generated<br>total</p>
            </div>
            <div>
                <div class="text-green-400 text-2xl font-bold">12.5K</div>
                <p class="text-gray-400 text-sm mt-1">Active Traders<br>users</p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-10">
            <button class="bg-green-500 hover:bg-green-600 text-white text-lg font-semibold px-6 py-3 rounded-full">
                Start Carbon Trading
            </button>
            <p class="text-gray-400 mt-3 text-sm">Join thousands of organizations monetizing their environmental impact</p>
        </div>
    </div>
</section>

<section class="bg-gray-900 text-white py-16 px-6" id="solutions">
    <div class="max-w-7xl mx-auto text-center">
        <!-- Heading -->
        <h2 class="text-4xl font-bold mb-4">Solutions for <span class="text-green-400">every space</span></h2>
        <p class="text-gray-300 mb-12">
            From small residential installations to large commercial deployments, we provide customized vertical farming solutions for any environment.
        </p>

        @php
            $solutions = [
                [
                    'title' => 'Commercial Buildings',
                    'icon' => '',
                    'features' => [
                        'Rooftop installations',
                        'Indoor air purification',
                        'Employee wellness programs',
                        'Sustainable food sourcing',
                    ]
                ],
                [
                    'title' => 'Industrial Facilities',
                    'icon' => '',
                    'features' => [
                        'Waste heat utilization',
                        'Water recycling systems',
                        'Carbon offset programs',
                        'Supply chain integration',
                    ]
                ],
                [
                    'title' => 'Residential Communities',
                    'icon' => '',
                    'features' => [
                        'Shared growing spaces',
                        'Educational programs',
                        'Fresh food access',
                        'Community engagement',
                    ]
                ],
                [
                    'title' => 'Educational Institutions',
                    'icon' => '',
                    'features' => [
                        'STEM curriculum integration',
                        'Student research projects',
                        'Cafeteria supply',
                        'Environmental education',
                    ]
                ],
                [
                    'title' => 'Healthcare Facilities',
                    'icon' => '',
                    'features' => [
                        'Therapeutic gardens',
                        'Patient nutrition programs',
                        'Staff wellness initiatives',
                        'Healing environments',
                    ]
                ],
                [
                    'title' => 'Retail & Restaurants',
                    'icon' => '',
                    'features' => [
                        'Farm-to-table freshness',
                        'Customer engagement',
                        'Marketing differentiation',
                        'Cost reduction',
                    ]
                ]
            ];
        @endphp

        <!-- Grid of Solutions -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
            @foreach ($solutions as $solution)
                <div class="bg-gray-800 p-6 rounded-lg shadow-md">
                    <div class="text-4xl mb-4">{{ $solution['icon'] }}</div>
                    <h3 class="text-xl font-bold mb-2">{{ $solution['title'] }}</h3>
                    <ul class="text-sm text-gray-300 space-y-1 mb-4 list-disc list-inside">
                        @foreach ($solution['features'] as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                    <button class="bg-green-500 hover:bg-green-600 text-white text-sm px-4 py-2 rounded">
                        Learn More
                    </button>
                </div>
            @endforeach
        </div>

        <!-- Custom Solution CTA -->
        <div class="bg-gray-800 mt-16 p-8 rounded-lg text-center">
            <h3 class="text-2xl font-semibold text-white mb-2">Need a Custom Solution?</h3>
            <p class="text-gray-400 text-sm mb-6">
                Our team of experts can design and implement a vertical farming solution tailored specifically<br>
                to your space, needs, and goals.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-full text-sm">
                    Schedule Consultation
                </a>
                <a href="#" class="bg-teal-500 hover:bg-teal-600 text-white font-semibold px-6 py-2 rounded-full text-sm">
                    Download Brochure
                </a>
            </div>
        </div>
    </div>
</section>


<section class="bg-[#0e1a2b] py-12 px-4">
    <div class="text-center text-white mb-10">
        <h2 class="text-3xl font-bold">
            Trusted by <span class="text-green-400">industry leaders</span>
        </h2>
        <p class="text-sm mt-2 text-gray-400">
            See how organizations across different industries are transforming their spaces and operations with our vertical farming solutions.
        </p>
    </div>

    <div class="overflow-hidden relative">
        <div class="flex gap-6 animate-scroll">
            @for ($i = 0; $i < 2; $i++) {{-- Duplicate to enable seamless loop --}}
                {{-- Testimonial card --}}
                <div class="min-w-[300px] bg-[#17263c] text-white rounded-lg p-5 shadow-md">
                    <p class="text-sm text-gray-300 mb-4">
                        "EPD transformed our office building with a stunning vertical farm. Our employees love the fresh produce, and we’ve reduced our carbon footprint by 40%."
                    </p>
                    <div>
                        <h4 class="font-semibold">Sarah Mitchell</h4>
                        <p class="text-xs text-gray-400">Sustainability Director, GreenTech Corp</p>
                    </div>
                </div>

                <div class="min-w-[300px] bg-[#17263c] text-white rounded-lg p-5 shadow-md">
                    <p class="text-sm text-gray-300 mb-4">
                        "Having our own vertical farm on-site has revolutionized our menu. The herbs and greens are incredibly fresh, and our customers can see where their food comes from."
                    </p>
                    <div>
                        <h4 class="font-semibold">Chef Marcus Rodriguez</h4>
                        <p class="text-xs text-gray-400">Executive Chef, Farm Table Restaurant</p>
                    </div>
                </div>

                <div class="min-w-[300px] bg-[#17263c] text-white rounded-lg p-5 shadow-md">
                    <p class="text-sm text-gray-300 mb-4">
                        "Our therapeutic garden and fresh produce program has improved patient satisfaction scores. The healing environment is remarkable."
                    </p>
                    <div>
                        <h4 class="font-semibold">James Thompson</h4>
                        <p class="text-xs text-gray-400">Facilities Manager, Metro Hospital</p>
                    </div>
                </div>

                <div class="min-w-[300px] bg-[#17263c] text-white rounded-lg p-5 shadow-md">
                    <p class="text-sm text-gray-300 mb-4">
                        "The educational vertical farm has become the heart of our STEM program. Students are engaged, learning about sustainability, and eating healthier."
                    </p>
                    <div>
                        <h4 class="font-semibold">Dr. Emily Chen</h4>
                        <p class="text-xs text-gray-400">Principal, Riverdale Elementary</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="mt-10 text-center text-white grid grid-cols-4 gap-2 max-w-xl mx-auto text-sm">
        <div>
            <p class="text-xl font-bold">500+</p>
            <p>Satisfied Clients</p>
        </div>
        <div>
            <p class="text-xl font-bold">98%</p>
            <p>Customer Satisfaction</p>
        </div>
        <div>
            <p class="text-xl font-bold">24/7</p>
            <p>Support Available</p>
        </div>
        <div>
            <p class="text-xl font-bold">5 Years</p>
            <p>Warranty Included</p>
        </div>
    </div>
</section>


<section class="bg-[#0e1a2b] text-white py-16 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">
            Ready to grow <span class="text-green-400">sustainably</span>?
        </h2>
        <p class="text-gray-400 max-w-2xl mx-auto mb-8">
            Join the vertical farming revolution. Transform your space, reduce your carbon footprint, and create a sustainable future with EPO's comprehensive solutions.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
            <a href="#" class="bg-green-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-green-500 transition">
                 Schedule Consultation
            </a>
            <a href="tel:+1234567890" class="bg-[#1a2f45] text-white px-6 py-3 rounded-lg border border-gray-600 hover:bg-[#233b55] transition">
                 Call Now
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8 mb-10">
            {{-- Left Box --}}
            <div class="bg-[#17263c] p-6 rounded-lg text-left shadow-lg">
                <h3 class="font-semibold text-lg mb-4">What you get with EPO:</h3>
                <ul class="text-gray-300 space-y-2 text-sm">
                    <li> Free initial consultation and site assessment</li>
                    <li> Custom design and installation planning</li>
                    <li> Comprehensive training and ongoing support</li>
                    <li> 5-year warranty on all equipment</li>
                    <li> Carbon credit trading assistance</li>
                    <li> 24/7 monitoring and maintenance services</li>
                </ul>
                <div class="flex flex-col sm:flex-row gap-3 mt-6">
                    <a href="mailto:info@epo-farms.com" class="bg-[#0e1a2b] px-4 py-2 rounded-md text-sm border border-gray-600 hover:bg-[#1a2f45]">
                        ✉ info@epo-farms.com
                    </a>
                    <a href="/brochure.pdf" class="bg-[#0e1a2b] px-4 py-2 rounded-md text-sm border border-gray-600 hover:bg-[#1a2f45]">
                        📄 Download Brochure
                    </a>
                </div>
            </div>

            {{-- Right Box --}}
            <div class="bg-[#17263c] p-6 rounded-lg shadow-lg">
                <h3 class="font-semibold text-lg mb-6">Join the Movement</h3>
                <div class="grid grid-cols-2 gap-6 text-center text-sm text-gray-300">
                    <div>
                        <p class="text-2xl font-bold text-white">500+</p>
                        <p>Farms Installed</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-white">2M+</p>
                        <p>Tons CO₂ Saved</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-white">50+</p>
                        <p>Countries Served</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-white">98%</p>
                        <p>Client Satisfaction</p>
                    </div>
                </div>
                <p class="text-xs mt-4 text-gray-500">Trusted by organizations worldwide</p>
            </div>
        </div>

        <div class="text-center mt-8">
            <img src="/storage/image.png" alt="Plant Icon" class="mx-auto mb-2 w-6 h-6">
            <p class="text-sm text-green-400">Growing the future, one farm at a time</p>
        </div>

        <div class="mt-8">
            <a href="#" class="bg-green-400 px-6 py-3 text-black font-bold rounded-full shadow hover:bg-green-500 transition">
                Start Your Vertical Farm Today →
            </a>
            <p class="text-xs mt-2 text-gray-400">No setup fees • Free consultation • 5-year warranty</p>
        </div>
    </div>
</section>


    @include('components.footer')
</body>
</html>
