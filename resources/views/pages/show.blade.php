@extends('layout.app')

@section ('content')
<div class="container">
    <a class = "btn btn-link" href="/blog/posts">All posts</a>
    <a class = "btn btn-link" href="/home">Your posts</a>
<h1 class="text-center">{{$post->title}}</h1>
<p class="lead text-center">{{$post->content}}</p>
<small>Written on {{$post->created_at}} by {{$post->user['name']}}</small><br><br>
</div>

@endsection
