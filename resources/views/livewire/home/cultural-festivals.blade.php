<div>
    <section class="py-16 bg-gradient-to-b from-white via-orange-100 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-3xl font-bold text-orange-700">
                    Cultural Festivals of Sri Lanka
                </h2>
                <p class="text-gray-600 mt-3 text-lg">
                    Discover the island’s most colorful celebrations and timeless traditions.
                </p>
            </div>

            <!-- Horizontal Scroll Section -->
            <div class="relative">
                <div class="flex space-x-8 overflow-x-auto snap-x snap-mandatory scrollbar-hide pb-4">
                    @foreach ($festivals as $festival)
                        <div class="snap-center shrink-0 w-[90%] md:w-[60%] lg:w-[40%] bg-white rounded-3xl shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-1 relative"
                            x-data="{ current: 0, total: {{ count($festival['images']) }} }"
                            x-init="setInterval(() => { current = (current + 1) % total }, 4000)">

                            <!-- Image Slider -->
                            <div class="relative h-72 overflow-hidden">
                                <template x-for="(image, index) in {{ json_encode($festival['images']) }}" :key="index">
                                    <img x-show="current === index" :src="image" alt="{{ $festival['name'] }}"
                                        class="w-full h-72 object-cover absolute inset-0"
                                        x-transition:enter="transition-opacity duration-2000"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity duration-2000"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" />

                                </template>

                                <!-- Gradient Shade Bottom -->
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white to-transparent">
                                </div>

                                <!-- Left Arrow -->
                                <button @click="current = (current - 1 + total) % total"
                                    class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white rounded-full p-2 shadow-md transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>

                                <!-- Right Arrow -->
                                <button @click="current = (current + 1) % total"
                                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white rounded-full p-2 shadow-md transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-700" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>

                                <!-- Dots -->
                                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                                    <template x-for="(dot, i) in total" :key="i">
                                        <div :class="{'bg-orange-700': current === i, 'bg-white/60': current !== i}"
                                            class="w-2 h-2 rounded-full"></div>
                                    </template>
                                </div>
                            </div>

                            <!-- Info Section -->
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold text-orange-700 mb-2">
                                    {{ $festival['name'] }}
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ $festival['description'] }}
                                </p>
                                <div class="flex justify-between text-sm text-gray-500">
                                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full">
                                        {{ $festival['month'] }}
                                    </span>
                                    <span class="italic">
                                        {{ $festival['location'] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Scroll hint (desktop only) -->
                <div
                    class="absolute right-0 top-1/2 -translate-y-1/2 hidden md:flex items-center bg-orange-600 text-white px-4 py-2 rounded-l-full shadow-lg animate-pulse">
                    <span>→ Swipe</span>
                </div>
            </div>
        </div>
    </section>

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

</div>