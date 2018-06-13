@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 col-md-8 offset-md-2 pt-3">
        <a href="/" class="font-weight-bold">dansup</a>
        <span class="px-2 text-muted">/</span>
        <a href="/blog" class="font-weight-bold">blog</a>
    </div>
</div>
<div class="container mt-5">
  
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


@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/dracula.min.css" integrity="sha256-tBn0J8E6kxVtZfyZhjb3ck8M44PMKCeOwhfGXPM20Bw=" crossorigin="anonymous" />
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js" integrity="sha256-/BfiIkHlHoVihZdc6TFuj7MmJ0TWcWsMXkeDFwhi0zw=" crossorigin="anonymous"></script>
<script>hljs.initHighlightingOnLoad();</script>
@endpush