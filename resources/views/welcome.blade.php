@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid text-light d-flex align-items-center justify-content-center mb-0" style="background-color:#363537;height: 700px;">
  <div class="container">
    <h1 class="display-4 font-overpass font-weight-bold">Hello, my name is <span class="text-b">Daniel</span>. <br>I am a <span class="">full stack developer</span> from Canada.<br>
    </h1>
  </div>
</div>
<div class="bg-light text-center py-4">
    <a class="text-b" href="#projects"><i class="fas fa-chevron-down fa-3x"></i></a>
</div>
<div class="bg-light d-flex align-items-center justify-content-center" style="height: 700px;">
    <div class="container row">
        <div class="col-12 my-4" id="projects">
            <p class="h3 text-b font-overpass font-weight-bold">Projects</p>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <a class="card" href="https://github.com/pixelfed/pixelfed">
                <div class="card-body bg-a text-white py-5 text-center font-overpass h3 font-weight-bold mb-0">
                    pixelfed
                </div>
                <div class="card-body px-3 text-center text-muted">
                    Open-source photo sharing platform
                </div>
            </a>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <a class="card" href="https://github.com/dansup/state">
                <div class="card-body bg-a text-white py-5 text-center font-overpass h3 font-weight-bold mb-0">
                    state
                </div>
                <div class="card-body px-3 text-center text-muted">
                    Self-hosted monitoring and status page
                </div>
            </a>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <a class="card" href="https://github.com/dansup/bulma-templates">
                <div class="card-body bg-a text-white py-5 text-center font-overpass h3 font-weight-bold mb-0">
                    bulma-templates
                </div>
                <div class="card-body px-3 text-center text-muted">
                    Free MIT licensed bulma templates
                </div>
            </a>
        </div>
    </div>
</div>

<div class="bg-light d-flex align-items-center justify-content-center" style="min-height: 700px;">
    <div class="container row">
        <div class="col-12 mb-4" id="posts">
            <p class="h3 text-b font-overpass font-weight-bold">Latest Posts</p>
        </div>
        <div class="col-12 mb-5 posts">
            @foreach($posts as $post)
            <div class="pb-5">
                <a class="hover-b" href="{{$post->url()}}">
                    <p class="h5 font-overpass font-weight-bold mb-0">{{$post->title}} →</p>
                    <p class="font-overpass mb-0">{{$post->excerpt}}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<footer class="container-fluid py-5 px-5">
    <div class="d-flex justify-content-between">
        <span class="font-overpass font-weight-bold text-b">Contact</span>
        <a class="font-overpass text-muted" href="#">Back to top</a>
    </div>
</footer>
@endsection
