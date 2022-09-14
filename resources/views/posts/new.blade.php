@extends('layout', ['title' => 'Create Post'])

@section('content')
  <h1>Add New Post</h1>
  <form method="POST" action="/posts" class="form">
    @csrf
    <input type="title" name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Content" rows="4" required></textarea>
    <button type="submit">Save Post</button>
  </form>
  <a href="/posts">Back to All Posts</a>
@endsection