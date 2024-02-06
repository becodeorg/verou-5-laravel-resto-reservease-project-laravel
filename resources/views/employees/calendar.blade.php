@include('employees._partials._head')

<body>

    @auth

    @include('employees._partials.header')

    <main>
        <h2>Calendar</h2>
        <p>Yo man, you're logged in!</p>
    </main>
    
    @else

    <main>
        <h2>Login</h2>
        <form action="/employees/login" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name"><br>
            <input type="password" name="password" placeholder="Paswword"><br>
            <button>Login</button>
        </form>
        <h2>Register</h2>
        <form action="/employees/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="password" name="password-check" placeholder="Password Check"><br>
            <button>Register</button>
        </form>
    </main>

    @endauth

    <footer><a href="/">back to client side</a></footer>

</body>

</html>