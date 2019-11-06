@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 col-md-8 offset-md-2 pt-3">
        <a href="/" class="text-a font-weight-bold ">dansup</a>
        <span class="text-muted">/</span>
        <a href="/blog" class="text-b font-weight-bold">blog</a>
    </div>
</div>
<div class="container mt-5 py-5">
  <div class="col-12 col-md-8 offset-md-2 pt-3">
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

       <div class="d-flex justify-content-center mt-4">
        {{$posts->links()}}
       </div>
      </div>

  </div>
</div>

@endsection