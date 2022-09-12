<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posts</title>
  <link rel="stylesheet" href="/app.css">
</head>
<body>
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
</body>
</html>