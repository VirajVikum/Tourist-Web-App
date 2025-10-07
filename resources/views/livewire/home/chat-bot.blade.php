<div>
    <!-- Floating WhatsApp Button -->
<div id="wa-btn" 
     class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg cursor-pointer hover:bg-green-600 transition">
  💬
</div>

<!-- Popup Form -->
<div id="wa-form" 
     class="hidden fixed bottom-20 right-6 bg-white shadow-xl rounded-lg w-80 p-5 border">
    
    <h3 class="text-lg font-semibold mb-3">Send a WhatsApp Message</h3>
    
    <input type="text" id="wa-name" 
        class="w-full border p-2 rounded mb-3" 
        placeholder="Your Name">
    
    <input type="email" id="wa-email" 
        class="w-full border p-2 rounded mb-3" 
        placeholder="Your Email">
    
    <input type="text" id="wa-phone" 
        class="w-full border p-2 rounded mb-3" 
        placeholder="Your WhatsApp Number">
    
    <textarea id="wa-message" 
        class="w-full border p-2 rounded mb-3" 
        rows="3" 
        placeholder="Message (optional)"></textarea>

    <button onclick="sendWhatsAppForm()" 
        class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600 transition">
        Send
    </button>
</div>

</div>

<script>
const waBtn = document.getElementById('wa-btn');
const waForm = document.getElementById('wa-form');

waBtn.addEventListener('click', () => {
    waForm.classList.toggle('hidden');
});

function sendWhatsAppForm() {
    const name = document.getElementById('wa-name').value.trim();
    const email = document.getElementById('wa-email').value.trim();
    const phone = document.getElementById('wa-phone').value.trim();
    const message = document.getElementById('wa-message').value.trim();

    if (!name || !email || !phone) {
        alert('Please fill in all required fields.');
        return;
    }

    // ✅ Replace with YOUR WhatsApp Number
    const businessNumber = '94704017188'; 

    const text = `New Inquiry:
Name: ${name}
Email: ${email}
WhatsApp: ${phone}
Message: ${message || 'No message provided'}`;

    const url = `https://wa.me/${businessNumber}?text=${encodeURIComponent(text)}`;
    window.open(url, '_blank');

    // Optional: close form after sending
    waForm.classList.add('hidden');
}
</script>
