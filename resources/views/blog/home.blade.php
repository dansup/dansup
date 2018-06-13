@extends('layouts.app')

@section('content')

<div class="container mt-5 py-5">
  <div class="col-12 col-md-8 offset-md-2 pt-3">
      <div class="header">
          <p class="display-4"><a href="/" class="text-muted">dansup</a> / <span class="text-primary">blog</span></p>
          <hr>
      </div>

      <div class="posts">
        @foreach($posts as $post)
          <div class="py-3">
              <a class="h3 font-weight-bold" href="{{$post->url()}}">
                {{$post->title}}
              </a>
              <p class="text-muted lead mb-0">
                {{$post->created_at->diffForHumans(null, true, true, true)}} ago by dansup
              </p>
          </div>
          @if(!$loop->last)
          <hr>
          @endif
          @endforeach
      </div>

  </div>
</div>

@endsection