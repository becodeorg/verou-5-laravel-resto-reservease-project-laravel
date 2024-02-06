@include('employees._partials._head')

<body>
    
    @include('employees._partials.header')

    <main>
        <h2>Login</h2>
        <form action="/employees/login" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button>Login</button>
        </form>
        <a href="/register">Click here to register</a>
    </main>

</body>

</html>