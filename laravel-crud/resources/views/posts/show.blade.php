@extends('layouts.main')

@section('title')
  All My Posts
@endsection

@section('content')
  <a href="/posts/title">
    <h1>{{$post->title}}</h1>
  </a>
  <p>{{$post->content}}</p>
  <hr>
@endsection