@extends('layouts.app')

@section('title','Create Image')

@section('content')
<h2>Create Image</h2>
<form action="/images" method="POST" enctype="multipart/form-data">
  @csrf
  <label class="secundary-btn">
    Seleccionar imagen
    <input type="file" name="image" hidden required>
  </label>
  <input type="text" name="description" placeholder="Description" required>
  <button class="primary-btn">Create</button>
</form>
@endsection
