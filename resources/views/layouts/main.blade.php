<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sakumlapa.index') }}">Sakumlapa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('darbinieku.index') }}">Darbinieki</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('velosipedi.index') }}">Velosipēdi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('transports') }}">Rezervācija</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
@yield('content')
</div>
</body>
</html>
