
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/images/talentorbit-fav.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Dashboard-specific CSS and JS -->
    @vite(['resources/css/app.css','resources/css/dashboard.css','resources/css/icons.min.css'  ])
</head>
<body class="group">

    <main class="container-fluid">
        @yield('content')
    </main>
    @vite(['resources/js/guest.js'])
</body>
</html>
