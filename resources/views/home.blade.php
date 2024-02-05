@include("_partials._head")

<body>

    <main>
        <div class="section profile">
            @include("_partials.header")
            @auth
            @include("_partials.profile-user")
            @else
            @include("_partials.profile-user")
            @endauth
            
        </div>


    </main>

</body>

</html>