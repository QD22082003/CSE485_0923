<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}">
</head>
<body>
<div class="container-fluid">
    @yield('main')
</div>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
