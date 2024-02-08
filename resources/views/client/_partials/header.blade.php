<header>
    <nav>
        <div class="svg-container">
            <object id="svg1" type="image/svg+xml" data="{{ asset('images/burgerlogowhite.svg') }}"></object>
            <object id="svg2" type="image/svg+xml" data="{{ asset('images/burgerman_ogen_toe.svg') }}"></object>
        </div>
        <a href="/">Menu</a>
        <a href="/reservations">Reservations</a>
        <a href="/about">About</a>
    </nav>
    <div class="title">
        <h1>ReservEase for Ziekenboeg</h1>
        <span>(By the sick for the sick!)</span>
    </div>
    <a class="dashboardlink" href="/login">Dashboard</a>
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

