<header>
    <nav>
        <div class="svg-container">
            <object id="svg1" type="image/svg+xml" data="{{ asset('images/burgerlogowhite.svg') }}"></object>
            <object id="svg2" type="image/svg+xml" data="{{ asset('images/burgerman_ogen_toe.svg') }}"></object>
        </div>
        @auth
        <a href="/employees">Calendar</a>
        <a href="/employees/tables">Tables</a>
        <a href="/employees/kitchen">Kitchen</a>
        @endauth
    </nav>

    <h1>Restaurant Dashboard</h1>
    </div>
    <div class="dashboardlink">
        <a href="/">Back to client side</a>
        @auth
        <form action="/employees/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
        @endauth
    </div>
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

