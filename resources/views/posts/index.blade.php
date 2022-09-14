@extends('layout', ['title' => 'Laravel Blog'])

@section('content')
  <h1>All Posts</h1>
  @foreach ($posts as $post)
      <h2>
        <a href="{{route('posts.viewpost', $post->id)}}">
          {{ $post->title }}
        </a>
      </h2>
      <p>{{ $post->content }}</p>
  @endforeach
  <a  href="/posts/new">
    Go to Create Post
  </a>
@endsection