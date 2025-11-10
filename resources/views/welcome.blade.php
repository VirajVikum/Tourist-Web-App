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

        <nav x-data="{ open: false, scrollY: 0 }"
     x-init="window.addEventListener('scroll', () => scrollY = window.scrollY)"
     :class="scrollY > 50 ? 'bg-gray-800 shadow-md' : 'bg-transparent'"
     class="fixed w-full z-1000 transition-colors duration-500">
     
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            @php
    $isHome = Route::currentRouteName() === 'home';
@endphp
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="/images/sri-lanka-logo.png" alt="Sri Lanka" class="w-16 h-16 object-cover">
                </a>
            </div>

            <!-- Desktop Links -->
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('home') }}" class="hover:text-blue-500 transition font-medium" :class="scrollY > 50 ? 'text-white' : 'text-white'">Home</a>
                <a href="{{ route('discover') }}" class="hover:text-blue-500 transition font-medium" :class="scrollY > 50 ? 'text-white' : 'text-white'">Discover</a>
                <a href="{{ route('about') }}" class="hover:text-blue-500 transition font-medium" :class="scrollY > 50 ? 'text-white' : 'text-white'">About</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-500 transition font-medium" :class="scrollY > 50 ? 'text-white' : 'text-white'">Contact</a>
            </div>

            <!-- Mobile hamburger -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-black hover:text-blue-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="md:hidden bg-gray-800 shadow-md">
        <a href="{{ route('home') }}" class="block px-4 py-2 text-white hover:bg-white">Home</a>
        <a href="{{ route('discover') }}" class="block px-4 py-2 text-white hover:bg-white">Discover</a>
        <a href="{{ route('about') }}" class="block px-4 py-2 text-white hover:bg-white">About</a>
        <a href="{{ route('contact') }}" class="block px-4 py-2 text-white hover:bg-white">Contact</a>
    </div>
</nav>




        {{-- @livewire('home.home-hero')
        @livewire('home.date-time-panel')
        @livewire('home.popular-tours')
        @livewire('home.cultural-festivals')
        @livewire('home.discover-country') --}}
        <!-- MAIN PAGE CONTENT -->
        <main class=" {{$isHome ? 'pt-0' : 'pt-16' }}">
            {{ $slot }}
        </main>
        

        
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


    <!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68e3965ae9dc6219554aa504/1j6sg6kur';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->

    @livewireScripts
</body>

</html>