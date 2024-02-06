<header>
    <nav>
        <img src="{{ asset('images/burgerlogowhite.svg') }}">
        @auth
        <a href="/employees">Calendar</a>
        <a href="/employees/tables">Tables</a>
        <a href="/employees/kitchen">Kitchen</a>
        @endauth
    </nav>
    <div class="title">
        <h1>Restaurant Dashboard</h1>
    </div>
    <div class="dashboardlink">
        <a href="/">Back to client side</a>
        @auth
        <form action="/employees/logout">
            <button>Logout</button>
        </form>
        @endauth
    </div>
</header>