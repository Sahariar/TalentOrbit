<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TalentOrbit') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('storage/images/talentorbit-fav.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.2.0/css/line.min.css
" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/css/public.css','resources/css/icons.min.css'])
</head>

<body class="font-sans antialiased bg-white">
    <div class="min-h-screen ">
        @include('layouts.pb-header')

        <main class="main-content">
            @yield('content')
        </main>
    </div>

    @include('layouts.pb-footer')
    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    @vite(['resources/js/app.js'])
</body>

</html>
