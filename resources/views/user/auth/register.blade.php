<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
    <form action="{{route('signup')}}" method="post">
        @csrf
            <input type="text" name="name" id=""placeholder="Username"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit">Daftar</button>
    </form>
    <a href="{{route('login')}}">Masuk</a>
</body>
</html>
