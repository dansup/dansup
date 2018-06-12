@extends('layouts.app')

@section('content')

<div class="container mt-5 py-5">
  
    <div class="col-12 col-md-8 offset-md-2 blog-post">
        <div class="pt-3">
            <a class="h1 font-weight-bold" href="{{$post->url()}}">
              {{$post->title}}
            </a>
            <p class="text-muted small mb-0">
              {{$post->created_at->format('M j, Y')}}
            </p>
        </div>
        <hr>
        @if(!is_null($post->image))
        <figure>
            <img src="{{Storage::url($post->image)}}" class="img-fluid mb-5">
        </figure>
        @endif
        <div class="lead blog-body">
            {!!$post->body!!}
        </div>
    </div>

</div>

@endsection