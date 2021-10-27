<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Fitko</title>

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    @stack('head')
</head>

<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <a class="navbar-brand" href="{{ route('reservations') }}">Rezervácie</a>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">{{ Auth::user()->name }}</a>
                </li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Odhlásiť</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    @include('_includes.alerts')
    @yield('content')
</main>
<!-- Bootstrap JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

</body>

</html>
