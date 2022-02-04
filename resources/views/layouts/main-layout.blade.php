<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="{{assets('/js/app.js')}}"></script>
    <link rel="stylesheet" href="{{assets('/css/app.css')}}">


</head>
<body>
    <div id="app">

        @include('components.header')

        @yield('content')

        @include('components.footer')

    </div>


</body>
</html>