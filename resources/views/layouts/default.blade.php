<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
    </style>
</head>
<body>

@include('layouts._header')
<div class="offset-md-1 col-md-10">
    @include('shared._message')
    @yield('content')
    @include('layouts._footer')
</div>

</body>
</html>
