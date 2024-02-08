@extends('_layouts.layout')

@section('title')
Login Page
@endsection

@section('content')
<main>
  <h2>Login</h2>
  <form action="/Login" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button>Login</button>
  </form>
  <a href="{{ route('showRegister') }}">Click here to register</a>
</main>
@endsection