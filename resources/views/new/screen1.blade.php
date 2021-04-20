<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    {{-- <link rel="stylesheet" type="text/css" href="../flag-icon-css-master/css/flag-icon.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('flag-icon-css-master/css/flag-icon.min.css') }}">

    {{-- <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">

    <title> Screen 1 </title>
</head>

<body style="background-color: #283046; font-family: sans-serif;">

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="#" style="color: white;"><span
                    class="flag-icon flag-icon-us"></span>&nbsp;English</a>
        </li>
    </ul>

    <div class="container mt-5" style="text-align: center;">

        {{-- <img src="profile.png" height="150" width="150" style="border-radius: 100px;"> --}}
        {{-- <img src="{{ asset("images/new/profile.png") }}" height="150" width="150" style="border-radius: 100px;"> --}}
        <img src="{{ auth()->user()->avatar }}" height="150" width="150" style="border-radius: 100px;">

        <p style="color: white; margin-top: 2rem;"> <strong> Hello {{ auth()->user()->firstname }}
                {{ auth()->user()->lastname }} </strong> </p>

        <p style="color: white; margin-top: 2rem; font-size: 2em;"> {{ date('l j F Y') }} </p>

        <p style="color: white; margin-top: 2rem; font-size: 6em;"> {{ date('H\hi') }} </p>

        <form method="POST" action="/step1_arrival" id="form1">
            @csrf
            <input type="hidden" name="arrival_date" value="{{ date('l j F Y') }}">
            <input type="hidden" name="arrival_time" value="{{ date('H\hi') }}">

        </form>

        <button type="submit" form="form1" style="background-color: inherit; padding: 0; border: none;"> <i
                class="fas fa-play-circle fa-10x" style="color: #23b24e;"></i> </button>

        {{-- <a href="/screen2"> <i class="fas fa-play-circle fa-10x" style="color: #23b24e;"></i> </a> --}}

    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>
