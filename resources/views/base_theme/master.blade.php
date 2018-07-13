<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Khandaker Akash | @yield('title')</title>
    <meta name="description" content="Personal Website of Khandaker Akash, Professional Web Application Developer from Bangladesh.">
    <meta name="keywords" content="Web Developer, Web Application Developer, Back-End Developer, Front-End Developer, PHP Developer, Laravel Developer, Bangladeshi Laravel Developer,  Bangladeshi Web Application Developer, Bangladeshi Front-End Web Developer, Professional Web Application Developer from Bangladesh">
    <meta name="author" content="Khandaker Akash">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/author/akash.jpg') }}" />

    <!-- montserrat font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- lora font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">

    <!-- font-awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- linea-icons -->
    <link rel="stylesheet" href="{{ asset('css/linea-icon-software.css') }}">
    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>

<div id="app">
    <a href="{{ URL::to('/') }}" class="back-to-home-icon">&larr;</a>
    @include('../partials/nav')
    @yield('content')
    @include('../partials/footer')
</div>

<!-- scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('app-scripts')
</body>
</html>