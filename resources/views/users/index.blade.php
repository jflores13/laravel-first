<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Users</title>
  <link rel="stylesheet" href="app.css">
</head>
<body>
  <h1>Le Users</h1>
  <ul>
    @foreach ($users as $user)
      <li>{{ $user->name }}</li>
    @endforeach
  </ul>
  <h2>Add a User</h2>
  <form method="POST" action="/users" class="form">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Save User</button>
  </form>
</body>
</html>