@extends('layouts.app')

@section('content')

<div class="container mt-5 py-5">
  
    <div class="header">
        <p class="display-4">blog</p>
        <hr>
    </div>

    <div class="posts">
      @foreach($posts as $post)
        <div class="py-3">
            <a class="h3 font-weight-bold" href="{{$post->url()}}">
              {{$post->title}}
            </a>
            <p class="text-muted lead mb-0">
              {{$post->created_at->diffForHumans(null, true, true, true)}} ago
            </p>
        </div>
        @if(!$loop->last)
        <hr>
        @endif
        @endforeach
    </div>

</div>

@endsection