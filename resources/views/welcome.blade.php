<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AutoEcole Project</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Css And FrameWork -->

    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">


</head>

<body>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Nav Bar -->
    <x-navbar />
    <br><br><br>
    <span id="messageAlert">@include('components/messages')</span>


    @yield('content')


    <x-footer/>
</body>

</html>

<script>
    // Afficher le message
    document.getElementById("messageAlert").style.display = "block";

    // Cacher le message après 3 secondes
    setTimeout(function() {
        document.getElementById("messageAlert").style.opacity = "0";
    }, 3000);

    // Supprimer le message après la fin de l'animation de fondu
    setTimeout(function() {
        document.getElementById("messageAlert").remove();
    }, 3500);
</script>