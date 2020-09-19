<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Welcome to the Dashboard</title>
</head>

<body>
     <h1 style="align-content: center;">WELCOME TO THE DASHBOARD</h1>


     <h1>{{ $user['name'] }}</h1>
     <h2>{{ $user['email'] }}</h2>


     <p><a href="/login">logout</a></p>
</body>

</html>