<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="flex justify-center mb-8">
    <h2 class="text-3xl font-bold text-center">
        <span class="text-gray-800">Most</span>
        <span id="typed-text" class="text-blue-400"></span>
        <span class="text-gray-800">of Sri Lanka</span>
    </h2>
</div>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($places as $place)
                <div
    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
    
    <!-- Image with animation -->
    <div class="relative overflow-hidden">
        <img src="{{ $place['image'] }}" alt="{{ $place['name'] }}"
            class="w-full h-48 object-cover transform transition-transform duration-700 group-hover:scale-110 group-hover:rotate-1">

        <!-- Gradient overlay appears on hover -->
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
        </div>

        <!-- Subtle floating tag -->
        <span
            class="absolute top-3 left-3 bg-blue-600/80 text-white text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm">
            {{ ucfirst($place['type']) }}
        </span>
    </div>

    <!-- Text content -->
    <div class="p-5">
        <h3 class="text-xl font-semibold text-gray-800 group-hover:text-blue-600 transition-colors duration-300 mb-2">
            {{ $place['name'] }}
        </h3>
        <p class="text-gray-600 text-sm mb-4">
            {{ $place['description'] }}
        </p>

        <a href="{{ route('place.details', $place['slug']) }}"
            class="inline-flex items-center text-blue-600 font-medium group-hover:text-blue-700 transition duration-300">
            Explore
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
</div>

            @endforeach
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Typed('#typed-text', {
            strings: [" Popular Tours", " Top Destinations", " Famous Trips"],
            typeSpeed: 50,
            backSpeed: 30,
            backDelay: 2000,
            loop: true,
            showCursor: true,
            cursorChar: '|'
        });
    });
</script>
