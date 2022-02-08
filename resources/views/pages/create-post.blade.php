@extends('layouts.main-layout')
@section('content')

    <form action="{{route('post.store')}}" method="POST">
        @method('POST')
        @csrf

        <label for="titlte">Tilte</label><br>
        <input type="text" name="titlte"><br>
        <label for="text">Text</label><br>
        <input type="text" name="text"><br>

        <input type="submit" value="create">
    </form>
    <a class="btn btn-secondary" href="{{route('logout') }}">logout</a>

@endsection