@extends('layouts.app')

@section('title','Register')

@section('content')
<h2>Register</h2>
<form action="/register" method="POST" enctype="multipart/form-data">
  @csrf
  <label class="secundary-btn">
    Seleccionar imagen
    <input type="file" name="image" hidden>
  </label>
  <div class="col">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirm" placeholder="Confirm">
  </div>
  <button class="primary-btn">Register</button>
</form>
<a href="{{url('/login')}}">Login</a>
@endsection
