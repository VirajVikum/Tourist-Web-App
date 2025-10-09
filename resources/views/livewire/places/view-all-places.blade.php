<div class="py-20 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-orange-700 mb-8 capitalize">
            {{ $type }} Adventures
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($locations as $location)
            <a href="{{ route('place.details', $location['slug']) }}">
                <div class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 cursor-pointer">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $location['image'] }}" alt="{{ $location['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full capitalize">
                            {{ $location['type'] }}
                        </span>
                    </div>

                    <div class="p-6">
                        <h4 class="text-xl font-bold text-orange-700 group-hover:text-orange-600 mb-2">
                            {{ $location['name'] }}
                        </h4>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            {{ $location['description'] }}
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
