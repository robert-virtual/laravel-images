@extends('layouts.app')

@section('title','Profile')


@section('content')

<form action="/profile" method="POST">
  @csrf
  <label class="secundary-btn">
    Seleccionar imagen
    <input type="file" name="image" hidden>
  </label>
  <div class="col">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <input type="text" name="nick" placeholder="Nick">
    <input type="email" name="email" placeholder="Email">
  </div>
  <button class="primary-btn">Update</button>
</form>
@endsection
