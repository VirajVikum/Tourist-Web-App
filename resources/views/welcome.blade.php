<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelCo - Explore the World</title>
    @vite('resources/js/app.js')
</head>
<body class="font-sans antialiased bg-gray-50">

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('/images/travel-hero.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-5xl font-bold mb-4">Explore the World Your Way</h1>
                <p class="text-xl mb-6">Choose from curated travel packages with comfortable vehicles included.</p>
                <a href="#packages" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold">View Packages</a>
            </div>
        </div>
    </section>

    <!-- Search/Booking Bar -->
    <section class="bg-white py-8 shadow-md -mt-16 z-10 relative container mx-auto rounded-lg p-4">
        <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <input type="text" placeholder="Destination" class="border rounded px-4 py-2"/>
            <input type="date" class="border rounded px-4 py-2"/>
            <select class="border rounded px-4 py-2">
                <option>Vehicle Type</option>
                <option>Car</option>
                <option>Van</option>
                <option>Bus</option>
            </select>
            <button class="bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-700 font-semibold">Search</button>
        </form>
    </section>

    <!-- Featured Packages -->
    <section id="packages" class="py-16 container mx-auto">
        <h2 class="text-3xl font-bold mb-8 text-center">Popular Travel Packages</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Package Card 1 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
                <img src="/images/package1.jpg" class="rounded mb-4" alt="Beach Getaway">
                <h3 class="text-xl font-semibold mb-2">Beach Getaway</h3>
                <p class="text-gray-600 mb-2">Includes 4-seater car and hotel stay</p>
                <p class="text-blue-600 font-bold">$499 / package</p>
                <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Book Now</button>
            </div>
            <!-- Package Card 2 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
                <img src="/images/package2.jpg" class="rounded mb-4" alt="Mountain Adventure">
                <h3 class="text-xl font-semibold mb-2">Mountain Adventure</h3>
                <p class="text-gray-600 mb-2">Includes 7-seater van and guided tour</p>
                <p class="text-blue-600 font-bold">$799 / package</p>
                <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Book Now</button>
            </div>
            <!-- Package Card 3 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
                <img src="/images/package3.jpg" class="rounded mb-4" alt="City Explorer">
                <h3 class="text-xl font-semibold mb-2">City Explorer</h3>
                <p class="text-gray-600 mb-2">Includes 5-seater car and local guide</p>
                <p class="text-blue-600 font-bold">$399 / package</p>
                <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Book Now</button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <img src="/icons/comfort.svg" class="mx-auto mb-4 w-16 h-16" alt="Comfort">
                <h3 class="font-bold text-xl mb-2">Comfortable Vehicles</h3>
                <p class="text-gray-600">Travel in style with modern vehicles for every package.</p>
            </div>
            <div>
                <img src="/icons/safety.svg" class="mx-auto mb-4 w-16 h-16" alt="Safety">
                <h3 class="font-bold text-xl mb-2">Safety First</h3>
                <p class="text-gray-600">All trips follow strict safety and hygiene protocols.</p>
            </div>
            <div>
                <img src="/icons/custom.svg" class="mx-auto mb-4 w-16 h-16" alt="Custom">
                <h3 class="font-bold text-xl mb-2">Custom Packages</h3>
                <p class="text-gray-600">Choose your destination, vehicle, and itinerary easily.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 container mx-auto">
        <h2 class="text-3xl font-bold mb-8 text-center">What Our Customers Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-gray-600 mb-4">“Amazing service and very comfortable vehicles. Highly recommend!”</p>
                <h4 class="font-bold">– Sarah K.</h4>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-gray-600 mb-4">“The best travel experience I’ve ever had. Great packages!”</p>
                <h4 class="font-bold">– James L.</h4>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <p class="text-gray-600 mb-4">“Professional service, easy booking, and comfortable cars.”</p>
                <h4 class="font-bold">– Priya M.</h4>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 TravelCo. All rights reserved.</p>
            <div class="mt-4 flex justify-center gap-4">
                <a href="#" class="hover:text-blue-400">Facebook</a>
                <a href="#" class="hover:text-blue-400">Twitter</a>
                <a href="#" class="hover:text-blue-400">Instagram</a>
            </div>
        </div>
    </footer>

</body>
</html>
