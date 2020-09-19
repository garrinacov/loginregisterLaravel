<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Login</title>
</head>

<body>
     <form action="/submit" method="POST">
          {{ csrf_field() }}

          <input type="text" name="name" id="" placeholder="name">
          <input type="email" name="email" id="" placeholder="email">
          <input type="password" name="password" id="" placeholder="password">
          <input type="submit" value="submit">
     </form>
</body>

</html>