<header>
    <nav>
         <div class="svg-container" onmouseover="changeSVG('{{ asset('images/burgerman_ogen_toe.svg') }}')" onmouseout="changeSVG('{{ asset('images/burgerlogowhite.svg') }}')">
         <object type="image/svg+xml" data="{{ asset('images/burgerlogowhite.svg') }}"></object>
        </div>
        <!-- <img src="{{ asset('images/burgerlogowhite.svg') }}">  default image element without animation-->
        <a href="/">Menu</a>
        <a href="/reservations">Reservations</a>
        <a href="/about">About</a>
    </nav>
    <div class="title">
        <h1>Reserv'Ease</h1>
        <span>(short for Reserve Easy)</span>
    </div>
    <a class="dashboardlink" href="/login">Dashboard</a>
</header>

