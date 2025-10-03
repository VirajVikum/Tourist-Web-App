<div class="bg-white py-4 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-6">

            <!-- Sri Lanka Logo -->
            <img src="/images/sri-lanka-logo.png" alt="Sri Lanka" class="w-18 h-18 object-cover">

            <!-- Real-time Clock -->
            <div class="time flex flex-col text-gray-800 items-center">
    <!-- Top Row: Hours, Minutes, Seconds (Horizontal Flex) -->
    <div class="flex items-baseline">
        <span class="time__hours text-xl font-bold">00</span>:
        <span class="time__min text-xl font-bold">00</span>:
        <span class="time__sec text-xl font-bold">00</span>
    </div>

    <!-- Bottom Row: AM/PM (Centered) -->
    <!-- The parent flex-col centers this div horizontally using items-center -->
    <div class="mt-[-4px]">
        <span class="time__ampm text-sm font-semibold">PM</span>
    </div>
</div>

            <!-- Real-time Date -->
            <div class="time flex flex-col text-gray-800 items-center">
            <div class="date text-gray-700">
                <span class="date__day font-semibold"></span>, 
                <span class="date__month"></span> 
                <span class="date__date"></span> 
                
            </div>
            <div class="mt-[-4px]">
                <span class="date__year"></span>
            </div>
            </div>

            <!-- Real-time Temperature -->
            <div id="weather-info" class="ml-auto flex items-center space-x-2 text-gray-800">
                <p class="text-lg font-semibold" id="temp">--°C</p>
                <p class="text-sm" id="condition">Loading...</p>
            </div>

        </div>
    </div>
</div>


<script>
function updateClock() {
    const now = new Date();
    // Convert to Colombo time (UTC+5:30)
    const utc = now.getTime() + (now.getTimezoneOffset() * 60000);
    const colomboTime = new Date(utc + (5.5 * 60 * 60 * 1000));

    let hours = colomboTime.getHours();
    const minutes = colomboTime.getMinutes();
    const seconds = colomboTime.getSeconds();
    const ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'

    document.querySelector('.time__hours').textContent = String(hours).padStart(2, '0');
    document.querySelector('.time__min').textContent = String(minutes).padStart(2, '0');
    document.querySelector('.time__sec').textContent = String(seconds).padStart(2, '0');
    document.querySelector('.time__ampm').textContent = ampm;

    // Date
    const options = { weekday: 'long', month: 'long', day: 'numeric', year: 'numeric' };
    const dateStr = colomboTime.toLocaleDateString('en-GB', options);
    const [day, month, date, year] = dateStr.replace(',', '').split(' ');
    document.querySelector('.date__day').textContent = day;
    document.querySelector('.date__month').textContent = month;
    document.querySelector('.date__date').textContent = date;
    document.querySelector('.date__year').textContent = year;
}

setInterval(updateClock, 1000);
updateClock();
</script>


<script>
    async function fetchWeather() {
        try {
            const tempElement = document.getElementById('temp');
            const conditionElement = document.getElementById('condition');
            console.log('Temp element:', tempElement);
            console.log('Condition element:', conditionElement);
            const response = await fetch('https://api.weatherapi.com/v1/current.json?key=YOUR_ACTUAL_API_KEY&q=Colombo');
            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            const data = await response.json();
            console.log('Weather data:', data);
            tempElement.textContent = `${data.current.temp_c}°C`;
            conditionElement.textContent = data.current.condition.text;
        } catch (err) {
            console.error('Weather fetch error:', err);
            document.getElementById('temp').textContent = '--°C';
            document.getElementById('condition').textContent = 'N/A';
        }
    }
    fetchWeather();
    setInterval(fetchWeather, 600000);
</script>
