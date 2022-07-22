@extends('layouts.app')

@section('title','Images')

@section('head')
@parent

@endsection

@section('content')
<h2>Images</h2>

@if(session('id'))
<a href="{{url('/images/create')}}">Publicar Image</a>
@endif

@isset($images)
<div class="grid">
  @foreach($images as $image)
  <div class="image">
    <img src="{{asset('pictures/'.$image->image_path)}}" alt="{{$image->description}}"></img>
    <p><b>{{$image->user->name}}</b> {{$image->description}} </p>

    @if($image->likes->where('user_id',session('id'))->first())
    <button>
      <span> {{count($image->likes)}}</span>
      <svg style="width: 1rem;" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
      </svg>
    </button>
    @else
    <form action="/likes" method="POST" class="col">
      @csrf
      <input type="number" name='image_id' value="{{$image->id}}" hidden>
      <button>
        <span> {{count($image->likes)}}</span>
        <svg style="width: 1rem;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
        </svg>
      </button>
    </form>
    @endif
    @isset($image->comments[0])

    <a class="col" href='{{url("images/$image->id")}}'>{{ count($image->comments) > 1 ? count($image->comments) : '' }} comentarios</a>

    <span> <b> {{$image->comments[0]->user->name}}</b> {{$image->comments[0]->content}}</span>
    @endisset
    <form action="/comments" method="POST" class="row">
      @csrf
      <input type="number" name='image_id' value="{{$image->id}}" hidden>
      <textarea type="text" placeholder="Haz un Comentario..." name="content" required></textarea>
      <button class="text-blue">
        Publicar
      </button>
    </form>
    <p class="text-gray">{{$image->created_at->diffForHumans()}}</p>
  </div>
  @endforeach
</div>
@endisset
@endsection
