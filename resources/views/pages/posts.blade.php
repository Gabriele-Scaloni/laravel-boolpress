@extends('layouts.main-layout')
@section('content')
    
    <h2>posts</h2>

    <table>

        <tr>
            <th>title</th>
            <th>text</th>
            <th>author</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post -> title}}</td>
                <td>{{$post -> text}}</td>
                <td>{{$post -> name_author}}</td>
            </tr>
        @endforeach

    </table> 
@endsection