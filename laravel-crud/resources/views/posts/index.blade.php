@extends('layouts.main')

@section('title')
  All My Posts
@endsection

@section('sidebar')
  This is the side menu
@endsection

@section('content')
  @foreach ($posts as $post)
    <a href="/posts/title">
      <h1>{{$post->title}}</h1>
    </a>
    <p>{{$post->content}}</p>
    <hr>
  @endforeach
@endsection