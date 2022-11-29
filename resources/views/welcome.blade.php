<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Fonts -->



</head>

<body style="background-color:rgb(243,244,246);">

    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-text">
            &nbsp; USCMSw
        </span>
        <span class="navbar-text">
            <a class="text-decoration-none" href="https://lauchlyn.com">My Website </a>&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
    </nav>


    <div class="jumbotron w-50 mx-auto" style="margin-top:10%;">
        <h1 class="display-4">Ultra Simple Cms</h1>
        <p class="lead">Ultra simple cms using laravel 8 </p>
        <hr class="my-4">
        <p>Login to see posts etc. or register an account to create your own posts</p>
        <p class="lead">
            @if (Route::has('login'))



                @auth

                    <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg active" role="button"
                        aria-pressed="true">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary" role="button" aria-pressed="true">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline" role="button">Register</a>
                    @endif
                @endauth

            @endif
        </p>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
