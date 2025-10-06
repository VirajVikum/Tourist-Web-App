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
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:-translate-y-1 transition transform duration-300">
                    <img src="{{ $place['image'] }}" alt="{{ $place['name'] }}" class="w-full h-48 object-cover">

                    <div class="p-5">
                        <h3 class="text-xl font-semibold mb-2">{{ $place['name'] }}</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ $place['description'] }}
                        </p>

                        <span class="inline-block bg-blue-100 text-blue-600 text-xs font-medium px-3 py-1 rounded-full">
                            {{ ucfirst($place['type']) }}
                        </span>
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
