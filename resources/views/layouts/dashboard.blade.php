<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme-color="sky">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/images/talentorbit-fav.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Dashboard-specific CSS and JS -->
    @vite(['resources/css/app.css','resources/css/dashboard.css','resources/css/icons.min.css'  ])
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>
<body class="group">
    @include('layouts.sidebar')
    @include('layouts.dash-header')

    <main class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        @yield('content')
        @include('layouts.dash-footer')
    </main>

    <script src="
https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js
"></script>
    @vite(['resources/js/dashboard.js'])

</body>
</html>
