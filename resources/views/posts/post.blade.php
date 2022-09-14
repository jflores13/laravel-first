@extends('layout', ['title' => $post->title])

<body>
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->content }}</p>
  <a  href="/posts">
    Go to All Posts
  </a>
</body>
</html>