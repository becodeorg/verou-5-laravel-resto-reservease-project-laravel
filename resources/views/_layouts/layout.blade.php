<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ReservEase')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    @yield('scripts')
  </head>

  <body>
    @include('./_includes/header')
    @yield('content')
    @include('./_includes/footer')
  </body>

</html>