<div class="">
<section class="py-20 bg-gradient-to-b from-white via-blue-100 to-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Title -->
        <div class="text-center mb-16 relative">
            <h2 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-500 to-cyan-400 bg-clip-text text-transparent">
                Explore Sri Lanka: The Island Paradise
            </h2>
            <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">
                Choose your journey — from wild safaris to rich cultural heritage and vibrant city life.
            </p>

            <div class="absolute -top-10 right-10 w-32 h-32 bg-blue-200 rounded-full blur-3xl opacity-40"></div>
            <div class="absolute bottom-0 left-10 w-48 h-48 bg-cyan-100 rounded-full blur-3xl opacity-40"></div>
        </div>

        <!-- Each category -->
        @foreach ($locationsByType as $type => $locations)
            <div class="mb-20">
                <!-- Category Title -->
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-3xl font-semibold text-blue-700 capitalize tracking-wide">
                        {{ ucfirst($type) }} Adventures
                    </h3>
                    <a href="{{ route('locations.viewAll', $type) }}"  class="text-blue-600 hover:text-blue-700 font-semibold flex items-center gap-1 transition">
                        View All
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Cards Container -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($locations as $location)
                    <div>
                        <a href="{{ route('place.details', $location['slug']) }}" wire:navigate>
                        <div
                            class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 cursor-pointer">
                            
                            <!-- Image -->
                            <div class="relative h-56 overflow-hidden">
                                <img src="{{ $location['image'] }}" alt="{{ $location['name'] }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                                <span
                                    class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full capitalize">
                                    {{ $type }}
                                </span>
                            </div>

                            <!-- Info -->
                            <div class="p-6">
                                <h4 class="text-xl font-bold text-blue-700 group-hover:text-blue-600 mb-2">
                                    {{ $location['name'] }}
                                </h4>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    {{ $location['description'] }}
                                </p>
                                <div class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition">
                                    Explore
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Glow hover effect -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-400 to-cyan-400 opacity-0 group-hover:opacity-10 transition-opacity duration-500 rounded-3xl">
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>

<style>
/* Hide scrollbars for mobile if we switch to horizontal mode */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>


</div>