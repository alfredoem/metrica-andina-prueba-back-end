<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Developers SAC - @yield('title', 'Welcome')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
</head>
<body>

    <nav>
        <div class="nav-wrapper">
            <a href="{{url('')}}" class="brand-logo center">Developers SAC</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
