@php
if (!isset($title)) {
    $title = 'Lara Prac';
}
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Assignment">
    <title>{{$title}}</title>
    <style>
        body{
            font-family:sans-serif;
        }

        .container {
            margin: 4px;
        }

        .error{
            color:red;
            font-size:12px;
        }

        .unit{
            padding:2px;
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="container">
        <a href="/"><button class="home_btn">Home</button></a>
        <a href="register"><button class="reg_btn">Register</button></a>
        <a href="login"><button class="log_btn">login</button></a>
        <a href="resume"><button class="res_btn">Resume</button></a>
    </div>
    @yield('content')
    @yield('js')
</body>

</html>