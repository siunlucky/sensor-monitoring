<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    @livewireStyles
</head>

<body>
    @include('partials.sidebar')
    @include('partials.navbar')
    <div id="page" class="page-container">
        <div class="main-content">
            @yield('main-content')
        </div>

    </div>

    @include('sweetalert::alert')

    <script src="js/main1.js"></script>
    {{-- <script src="assets/pspdfkit.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @livewireScripts

</body>

</html>