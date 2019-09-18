@extends('layouts.main')

@section('title')
  All My Posts
@endsection

@section('sidebar')
  This is the side menu
@endsection

@section('content')
  @foreach ($posts as $post)
  <a href="/posts/{{$post->id}}">
      <h1>{{$post->title}}</h1>
      <h3>{{$post->category->title}}</h3>
    </a>
    <p>{{$post->content}}</p>
    <p>{{$post->total()}} views</p>
    <hr>
  @endforeach
@endsection