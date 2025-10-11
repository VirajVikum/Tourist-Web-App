<div class="max-w-6xl mx-auto px-6 py-16">
    <div class="flex flex-col md:flex-row items-start gap-10">
        <!-- Image -->
        <div class="md:w-1/2 relative group">
            <img src="{{ $place['image'] }}" alt="{{ $place['name'] }}"
                 class="rounded-2xl shadow-xl w-full h-96 object-cover transform transition-transform duration-700 group-hover:scale-105">
            <span class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 text-xs rounded-full">
                {{ ucfirst($place['type']) }}
            </span>
        </div>

        <!-- Details -->
        <div class="md:w-1/2">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $place['name'] }}</h1>
            <p class="text-gray-700 mb-6">{{ $place['description'] }}</p>

            <div class="space-y-2">
                <p><span class="font-semibold text-gray-800">📍 Location:</span> {{ $place['location'] }}</p>
                <p><span class="font-semibold text-gray-800">🕒 Best Time to Visit:</span> {{ $place['best_time'] }}</p>
            </div>

            <div class="mt-6">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Highlights</h3>
                <ul class="grid grid-cols-2 gap-2">
                    @foreach ($place['highlights'] as $item)
                        <li class="flex items-center gap-2">
                            <span class="text-blue-600">✔</span> <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-8">
                <a href="{{ route('home') }}"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg transition duration-300">
                    ← Back to Home
                </a>
            </div>
        </div>
    </div>
</div>
