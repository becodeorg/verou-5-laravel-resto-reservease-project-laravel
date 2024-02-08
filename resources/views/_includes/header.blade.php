<header>  
  <nav>
    <div class="svg-container">
      <object id="svg1" type="image/svg+xml" data="{{ asset('images/burgerlogowhite.svg') }}"></object>
      <object id="svg2" type="image/svg+xml" data="{{ asset('images/burgerman_ogen_toe.svg') }}"></object>
    </div>
    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      @guest
      <li><a href="{{ route('menus') }}">Menu</a></li>
      <li><a href="{{ route('reservations.create') }}">Reservation</a></li>
      <li><a href="{{ route('about') }}">About Us</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
      </nav>
      <div class="title">
        <h1>ReservEase for Ziekenboeg</h1>
        {{-- <span>(By the sick for the sick!)</span> --}}
      </div>
      <a class="dashboardlink" href="{{ route('login') }}">Dashboard</a>
      @endguest

      @auth
      <h2>Welcome to the ReservEase platform, {{ auth()->user()->name }}!</h2>
      <div class="dashboardlink">
        <a href="{{ route('home') }}">Back to client side</a>
        <form action="/employees/logout" method="POST">
          @csrf
          <button>Logout</button>
        </form>
      </div>
      @endauth
    </ul>
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