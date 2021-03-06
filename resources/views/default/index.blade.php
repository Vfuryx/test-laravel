<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','app')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('default._header')

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared.messages')
        @yield('content')
        @include('default._footer')
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>