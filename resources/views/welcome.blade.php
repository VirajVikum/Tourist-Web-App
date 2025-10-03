<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelCo - Explore the World</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Hero Section -->
    <div x-data="{ scrollAtTop: true }"
        x-init="window.addEventListener('scroll', () => { scrollAtTop = window.scrollY === 0 })">

        <nav x-data="{ scrollY: 0 }" x-init="window.addEventListener('scroll', () => { scrollY = window.scrollY })"
            :class="scrollY > 50 ? 'bg-white shadow-md' : 'bg-transparent'"
            class="fixed w-full z-50 transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="#" class="text-xl font-bold"
                            :class="scrollY > 50 ? 'text-gray-800' : 'text-white'">MyLogo</a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:flex space-x-4">
                        <a href="#" :class="scrollY > 50 ? 'text-gray-800' : 'text-white'"
                            class="hover:text-blue-500 transition">Home</a>
                        <a href="#" :class="scrollY > 50 ? 'text-gray-800' : 'text-white'"
                            class="hover:text-blue-500 transition">About</a>
                        <a href="#" :class="scrollY > 50 ? 'text-gray-800' : 'text-white'"
                            class="hover:text-blue-500 transition">Services</a>
                        <a href="#" :class="scrollY > 50 ? 'text-gray-800' : 'text-white'"
                            class="hover:text-blue-500 transition">Contact</a>
                    </div>
                </div>
            </div>
        </nav>


        @livewire('home.home-hero')
        @livewire('home.date-time-panel')

        
    </div>

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

    @livewireScripts
</body>

</html>