<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') Laravel Imagenes</title>
  @section('head')
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  @show
</head>

<body>
  <nav class="row">
    <a href="{{url('/')}}">Inicio</a>
    <a href="{{url('/images')}}">Images</a>
    @if(session('id'))
    <a href='{{url("/profile")}}'>{{session('name')}}</a>
    <form action="/logout" method="POST" class="row">
      @csrf
      @method('DELETE')
      <button class="primary-btn">Logout</button>
    </form>
    @else
    <a href="{{url('/login')}}">Login</a>
    @endif
  </nav>

  <main>
    @yield('content')
  </main>

</body>

</html>
