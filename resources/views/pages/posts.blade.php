@extends('layouts.main-layout')
@section('content')
    
    <a class="btn btn-primary" href="{{route('post.create')}}">Crea un nuovo post</a>
    <h1>posts</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Text</th>
            <th>Likes</th>
            <th>Data</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post -> title }}</td>
                <td>{{ $post -> text }}</td>
                <td>{{ $post -> likes }}</td>
                <td>{{ $post -> created_at }}</td>
            </tr>
        @endforeach
    </table>
   
@endsection