@extends('layouts.main')

@section('title')
  All My Posts
@endsection

@section('sidebar')
  This is the side menu
@endsection

@section('content')
<form action="/posts" method="POST">
  {{ csrf_field() }}
  <h1>Create a post</h1>
  <hr>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name ="title" class="form-control" id="title" placeholder="Enter title">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection