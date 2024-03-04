<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$name}}</title>
    <style>
        body{
            font-family:sans-serif;
        }
    </style>
    @yield('css')
</head>
<body>
    @yield('content')
    @yield('js')
</body>
</html>