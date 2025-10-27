<div class="bg-gradient-to-br from-orange-100 via-white to-yellow-100">
    <div class="grid grid-cols-6 min-h-screen ">
    
    <!-- Left: Contact Info -->
    <div class="col-span-2 flex flex-col justify-center p-8 space-y-6 pl-20">
        <h2 class="text-3xl font-extrabold text-orange-600 mb-6">Contact Information</h2>

        <a href="https://wa.me/94763464670?text=How%20can%20I%20travel%20in%20Sri%20Lanka"
   target="_blank"
   rel="noopener noreferrer"
   class="flex items-center gap-4 bg-white/80 backdrop-blur-lg p-4 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1">

    <!-- WhatsApp Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12.04 2C6.57 2 2.12 6.45 2.12 11.92c0 2.11.55 4.16 1.6 5.96L2 22l4.27-1.67a10.02 10.02 0 0 0 5.77 1.78h.01c5.47 0 9.92-4.45 9.92-9.92C21.96 6.45 17.51 2 12.04 2zm0 18.1h-.01a8.13 8.13 0 0 1-4.13-1.13l-.3-.18-2.53.99.95-2.6-.2-.33a8.12 8.12 0 0 1-1.24-4.34c0-4.49 3.65-8.14 8.14-8.14a8.13 8.13 0 0 1 8.14 8.14c0 4.49-3.65 8.14-8.14 8.14z"/>
        <path d="M16.71 14.29c-.27-.14-1.57-.77-1.81-.85-.24-.09-.41-.14-.58.14-.17.27-.67.84-.82 1.01-.14.17-.3.19-.56.07-.27-.14-1.14-.42-2.18-1.34-.8-.71-1.34-1.58-1.5-1.85-.16-.27-.02-.42.12-.56.12-.12.27-.31.4-.47.13-.16.17-.27.25-.45.08-.17.04-.32-.02-.46-.06-.14-.58-1.4-.79-1.93-.21-.5-.42-.44-.58-.45l-.49-.01c-.17 0-.46.07-.7.34-.24.27-.92.9-.92 2.2s.95 2.55 1.09 2.73c.14.17 1.86 2.84 4.53 3.98.63.27 1.12.43 1.5.55.63.2 1.2.17 1.65.1.5-.07 1.57-.64 1.8-1.26.22-.63.22-1.17.15-1.26-.06-.09-.23-.14-.5-.27z"/>
    </svg>

    <div>
        <p class="font-semibold text-gray-800">WhatsApp</p>
        <p class="text-gray-600">+94 76 346 4670</p>
    </div>
</a>




        <div class="flex items-center gap-4 bg-white/80 backdrop-blur-lg p-4 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h4m-2-2v4m-4 4v-8m0 0h-4m4 0h4"/>
            </svg>
            <div>
                <p class="font-semibold text-gray-800">Email</p>
                <p class="text-gray-600">info@travelco.com</p>
            </div>
        </div>

        <div class="flex items-center gap-4 bg-white/80 backdrop-blur-lg p-4 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 7-7 7-7-7 7-7z"/>
            </svg>
            <div>
                <p class="font-semibold text-gray-800">Address</p>
                <p class="text-gray-600">123 Colombo Street, Colombo, Sri Lanka</p>
            </div>
        </div>

        <div class="flex items-center gap-4 bg-white/80 backdrop-blur-lg p-4 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/>
            </svg>
            <div>
                <p class="font-semibold text-gray-800">Working Hours</p>
                <p class="text-gray-600">Mon - Fri, 9:00 AM - 6:00 PM</p>
            </div>
        </div>
    </div>

    <!-- Right: Contact Form -->
    <div class="col-span-4 flex items-center justify-center px-4 py-8">
        <div class="bg-white/70 backdrop-blur-lg shadow-2xl rounded-3xl p-10 md:w-3/4 w-full border border-white/50">

            <h2 class="text-4xl font-bold text-center text-orange-600 mb-6">Contact Us</h2>
            <p class="text-center text-gray-600 mb-8">We’d love to hear from you! Fill out the form below.</p>

            @if ($success)
                <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-6 text-center animate-pulse">
                    ✅ Your message has been sent! We'll get back to you soon.
                </div>
            @endif

            <form wire:submit.prevent="submit" class="space-y-4">
                <input type="text" wire:model="name" placeholder="Your Name"
                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-orange-500 focus:ring-orange-500 focus:ring-2 outline-none shadow-sm transition">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                <input type="email" wire:model="email" placeholder="Email Address"
                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-orange-500 focus:ring-orange-500 focus:ring-2 outline-none shadow-sm transition">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                <textarea wire:model="message" rows="5" placeholder="Your Message"
                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-orange-500 focus:ring-orange-500 focus:ring-2 outline-none shadow-sm transition"></textarea>
                @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                <button type="submit"
                    class="w-full bg-gradient-to-r from-orange-500 to-yellow-400 hover:from-orange-600 hover:to-yellow-500 text-white py-3 rounded-xl font-semibold transition transform hover:-translate-y-1 shadow-md">
                    Send Message
                </button>
            </form>

        </div>
    </div>

</div>


    <div class="mt-10">
        <h3 class="text-3xl font-extrabold text-center text-orange-600 mb-6">Find Us Here</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.22189345636!2d79.77353104825884!3d6.927078606598182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595dc2917e19%3A0x74b0c5bead2c62e5!2sColombo!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk"
            width="100%" height="300" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>


</div>