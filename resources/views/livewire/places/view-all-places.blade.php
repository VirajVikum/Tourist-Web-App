<div class="py-20 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-orange-700 mb-8 capitalize">
            {{ $type }} Adventures
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8
            [grid-auto-rows:1fr]">   <!-- optional – equal rows -->
    @foreach($locations as $location)
        <a href="{{ route('place.details', $location['slug']) }}" class="block">
            <article class="group relative bg-white rounded-3xl overflow-hidden shadow-lg
                            hover:shadow-2xl hover:-translate-y-2 transition-all duration-500
                            cursor-pointer flex flex-col h-full">

                <!-- IMAGE – fixed -->
                <div class="relative h-56 overflow-hidden flex-shrink-0">
                    <img src="{{ $location['image'] }}"
                         alt="{{ $location['name'] }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    <span class="absolute top-3 left-3 bg-orange-600 text-white text-xs font-semibold
                                 px-3 py-1 rounded-full capitalize">
                        {{ $location['type'] }}
                    </span>
                </div>

                <!-- CONTENT – grows -->
                <div class="p-6 flex flex-col flex-grow">

                    <!-- TITLE – full, no clamp -->
                    <h4 class="text-xl font-bold text-orange-700 group-hover:text-orange-600 mb-3">
                        {{ $location['name'] }}
                    </h4>

                    <!-- BRIEF DESCRIPTION – always 3 lines, fixed height -->
                    <p class="text-gray-600 text-sm flex-grow line-clamp-2"
                       style="height: 1rem; overflow: hidden;">
                        {{ $location['description'] }}
                    </p>

                    <!-- BUTTON – always at bottom -->
                    <div class="mt-4 inline-flex items-center text-orange-600 font-semibold
                                hover:text-orange-700 transition">
                        Explore
                        <svg class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <!-- GLOW -->
                <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-yellow-400
                            opacity-0 group-hover:opacity-10 transition-opacity duration-500
                            rounded-3xl pointer-events-none"></div>
            </article>
        </a>
    @endforeach
</div>
    </div>
</div>
