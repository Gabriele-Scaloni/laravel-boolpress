<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <h1>home</h1>
    @auth
        welcome {{Auth::user() ->name}}
    @endauth
    <nav>
        <h2>Login</h2>

        <form action="{{route('login')}}" method="POST">

            @method('POST')
            @csrf

            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>

            <input type="submit" value="Login">
        </form>
    </nav>
    <nav>
        <h2>Register</h2>

        <form action="{{route('register')}}" method="POST">

            @method('POST')
            @csrf
            
            <label for="name">Name</label><br>
            <input type="text" name="name"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <label for="password_confirmation">Password Confirmation</label><br>
            <input type="password" name="password_confirmation"><br>

            <input type="submit" value="Register">
        </form>
    </nav>
</body>
</html>