@extends('layouts.main-layout')
@section('content')

    <form action="{{route('post.store')}}" method="POST">
        @method('POST')
        @csrf

        <label for="titlte">Tilte</label><br>
        <input type="text" name="titlte"><br>
        <label for="text">Text</label><br>
        <input type="text" name="text"><br>

        <label for="category">category</label><br>
        <select name="category">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
        </select>

        <input type="submit" value="create">
    </form>

@endsection