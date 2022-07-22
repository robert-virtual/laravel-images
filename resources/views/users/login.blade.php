
@extends('layouts.app')

@section('title','Register')

@section('content')
<h2>Login</h2>
<form action="/login" method="POST">
  @csrf
  <div class="col">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
  </div>
  <button class="primary-btn">Login</button>
</form>
@if(session('error'))
<p class="error">{{session('error')}}</p>
@endif
<a href="{{url('register')}}">Register</a>
@endsection
