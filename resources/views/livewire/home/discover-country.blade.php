{{-- <section class="py-16 bg-gradient-to-b from-white via-blue-100 to-white"> --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-orange-700">Discover Sri Lanka</h2>
            <p class="text-gray-600 mt-3 text-lg">Explore the land, people, culture, and environment of Sri Lanka in depth.</p>
        </div>

        @foreach($topics as $topic)
            <div class="flex flex-col md:flex-row {{ $loop->index % 2 !== 0 ? 'md:flex-row-reverse' : '' }} items-center mb-20 gap-10">

                <!-- Image Collage -->
                <div class="md:w-1/2 w-full flex justify-center md:justify-start">
                    <div class="flex -space-x-6 relative">
                        @foreach($topic['images'] as $i => $img)
                            <div 
                                class="relative group transition-all duration-500 ease-in-out"
                                style="z-index: {{ 10 - $i }};"
                            >
                                <img 
                                    src="{{ $img }}" 
                                    alt="{{ $topic['title'] }}" 
                                    class="w-50 h-50 md:w-48 md:h-48 object-cover rounded-full shadow-lg border-4 border-white transition-transform duration-500 group-hover:scale-105"
                                >
                                <!-- Hover effect: bring to front -->
                                <style>
                                    .group:hover { z-index: 50 !important; transform: scale(1.05); }
                                </style>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Description -->
                <div class="md:w-1/2 w-full text-center md:text-left">
                    <h3 class="text-3xl font-bold text-orange-700 mb-4">{{ $topic['title'] }}</h3>
                    <p class="text-gray-700 text-lg mb-4">{{ $topic['description'] }}</p>
                    <a href="{{ route('discover.show', $topic['key']) }}" 
                        class="inline-block text-white bg-orange-600 px-6 py-3 rounded-full shadow-lg hover:bg-orange-700 transition">
                        Read More
                    </a>
                </div>

            </div>
        @endforeach

    </div>
</section>


