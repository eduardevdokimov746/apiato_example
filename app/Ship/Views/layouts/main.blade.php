<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
{{--    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<div id="app" class="container">
    @yield('content')
</div>

</body>
</html>
