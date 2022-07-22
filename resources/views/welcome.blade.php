@extends('layouts.app')

@section('title','Inicio')

@section('head')
  @parent

  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
@endsection




@section('content')
<h2>Welcome {{session('name') ?? ''}}</h2>
@endsection

