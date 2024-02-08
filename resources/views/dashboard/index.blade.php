@extends('_layouts.layout')

@section('title')
Main dashboard
@endsection

@section('content')
<main class="container mx-auto w-4/5 ">
  @auth
    <h1>Welcome back, {{ auth()->user()->name }}!</h1>
  @endauth
  <div>
    <a href="{{ route('showReservations') }}">See Bookings</a>
    <a href="{{ route('editKitchen') }}">Edit menu content</a>
  </div>
</main>
@endsection