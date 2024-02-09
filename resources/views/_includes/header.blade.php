<header>  
  <nav>
    <div class="svg-container">
      <object id="svg1" type="image/svg+xml" data="{{ asset('images/burgerlogowhite.svg') }}"></object>
      <object id="svg2" type="image/svg+xml" data="{{ asset('images/burgerman_ogen_toe.svg') }}"></object>
    </div>
    @guest
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('menu') }}">Menu</a>
    <a href="{{ route('reservations') }}">Reservation</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
    <div class="title">
      <h1>ReservEase for Ziekenboeg</h1>
    </div>
    <a class="dashboardlink" href="{{ route('showLogin') }}">Dashboard</a>
    @endguest
    @auth
    <a href="{{ route('showDashboard') }}">Mainboard</a>
    <a href="{{ route('showReservations') }}">Bookings</a>
    <a href="{{ route('editKitchen') }}">Kitchen</a>
    <div class="dashboardlink">
      <a href="{{ route('home') }}">client side</a>
      <form action="/Logout" method="POST">
        @csrf
        <button>Logout</button>
      </form>
    </div>
    @endauth
  </nav>
</header>

<script>
    function toggleSVGs() {
        const svg1 = document.getElementById('svg1');
        const svg2 = document.getElementById('svg2');

        // Get the visibility of the first SVG
        const svg1Visible = svg1.style.display !== 'none';

        // Toggle the visibility of the SVGs
        if (svg1Visible) {
            svg1.style.display = 'none';
            svg2.style.display = 'inline-block'; // or 'block' depending on the layout
        } else {
            svg1.style.display = 'inline-block'; // or 'block' depending on the layout
            svg2.style.display = 'none';
        }
    }

    // Call the toggleSVGs function at regular intervals (e.g., every 3 seconds)
    setInterval(toggleSVGs, 3000); // Adjust the interval as needed
</script>