@extends('layouts.main-layout')
@section('content')
    <h3>ciao</h3>

    <form> 
        <label for="name">name</label><br>
        <input type="text" name="name"><br>

        <label for="email">email</label><br>
        <input type="email"  name="email"><br>

        <label for="password">password</label><br>
        <input type="password"  name="password" ><br>

        <label for="password_confirmation">password confirmation</label><br>
        <input type="password" name="password_confirmation"><br>
        
        <input type="submit" value="Registrati">
    </form>
@endsection