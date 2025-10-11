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

        <nav 
    x-data="{ scrollY: 0 }"
    x-init="window.addEventListener('scroll', () => { scrollY = window.scrollY })"
    :class="(
        '{{ Route::currentRouteName() }}' === 'home' 
            ? (scrollY > 50 ? 'bg-white shadow-md' : 'bg-transparent') 
            : 'bg-white shadow-md text-accent-content'
    )"
    class="fixed w-full z-50 transition-colors duration-500"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="/images/sri-lanka-logo.png" alt="Sri Lanka" class="w-16 h-16 object-cover">
                </a>
            </div>

            <!-- Navigation Links -->
            @php
    $isHome = Route::currentRouteName() === 'home';
@endphp

<div class="hidden md:flex space-x-4">
    <a href="{{ route('home') }}" 
       :class="{{ $isHome ? "scrollY > 50 ? 'text-gray-800' : 'text-white'" : "'text-gray-800'" }}"
       class="hover:text-orange-500 transition font-medium">Home</a>

    <a href="{{ route('discover.show') }}" 
       :class="{{ $isHome ? "scrollY > 50 ? 'text-gray-800' : 'text-white'" : "'text-gray-800'" }}"
       class="hover:text-orange-500 transition font-medium">Discover</a>

    <a href="#" 
       :class="{{ $isHome ? "scrollY > 50 ? 'text-gray-800' : 'text-white'" : "'text-gray-800'" }}"
       class="hover:text-orange-500 transition font-medium">About</a>

    <a href="{{ route('contact') }}" 
       :class="{{ $isHome ? "scrollY > 50 ? 'text-gray-800' : 'text-white'" : "'text-gray-800'" }}"
       class="hover:text-orange-500 transition font-medium">Contact</a>
</div>

        </div>
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