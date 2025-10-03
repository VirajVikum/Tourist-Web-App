<div x-data="{
        current: @entangle('currentIndex'), 
        images: {{ json_encode($images) }},
        init() {
            setInterval(() => {
                this.current = (this.current + 1) % this.images.length;
            }, 5000); // change every 5 seconds
        }
    }" class="relative w-full h-screen overflow-hidden">

    <!-- Slides -->
    <template x-for="(image, index) in images" :key="index">
        <div 
            x-show="current === index" 
            class="absolute inset-0 transition-opacity duration-1000" 
            x-transition:enter="transition-opacity duration-1000"
            x-transition:leave="transition-opacity duration-1000"
        >
            <img :src="'/images/slider/' + image" class="w-full h-full object-cover">
        </div>
    </template>

    <!-- Previous Button -->
    <button @click="current = (current - 1 + images.length) % images.length" 
            class="absolute left-5 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full">
        &#10094;
    </button>

    <!-- Next Button -->
    <button @click="current = (current + 1) % images.length" 
            class="absolute right-5 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full">
        &#10095;
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <template x-for="(image, index) in images" :key="index">
            <span 
                @click="current = index" 
                :class="current === index ? 'bg-white' : 'bg-gray-500'" 
                class="w-3 h-3 rounded-full cursor-pointer"></span>
        </template>
    </div>
</div>
