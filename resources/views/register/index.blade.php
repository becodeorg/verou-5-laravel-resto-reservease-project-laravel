@extends('_layouts.layout')

@section('title')
Register Page
@endsection

@section('content')
<main>
  <h2>Register</h2>
  <form action="/employees/register" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password-check" placeholder="Password Check"><br>
    <button>Register</button>
  </form>
  <a href="/login">Already a login? Click here!</a>
</main>
@endsection