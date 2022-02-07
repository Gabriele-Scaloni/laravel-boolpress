@extends('layouts.main-layout')
@section('content')
    @guest {{-- la parte dentro guest compare solo quando non sono loggato.--}}
        

        <h3>Registrazione</h3>

        <form action="{{route('register')}}" method="POST"> 
            @method('POST')
            @csrf

            <label for="name">name</label><br>
            <input type="text" name="name"><br>

            <label for="email">email</label><br>
            <input type="email" name="email"><br>

            <label for="password">password</label><br>
            <input type="password" name="password" ><br>

            <label for="password_confirmation">password confirmation</label><br>
            <input type="password" name="password_confirmation"><br>
            
            <input type="submit" value="Register">

        </form>

        <hr>

        <h3>Login</h3>
        <form action="{{route('login')}}" method="POST">

            @method('POST')
            @csrf

            <label for="email">email</label><br>
            <input type="email"  name="email"><br>

            <label for="password">password</label><br>
            <input type="password"  name="password" ><br>

            <input type="submit" value="Login">

        </form>

        @else 

        
    @endguest
@endsection