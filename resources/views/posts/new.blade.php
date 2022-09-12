<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add New Post</title>
  <link rel="stylesheet" href="/app.css">
</head>
<body>
  <h1>Add New Post</h1>
  <form method="POST" action="/posts" class="form">
    @csrf
    <input type="title" name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Content" rows="4" required></textarea>
    <button type="submit">Save Post</button>
  </form>
  <a href="/posts">Back to All Posts</a>
</body>
</html>