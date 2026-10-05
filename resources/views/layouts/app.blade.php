<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Apex Construction Consultants') | Pre-Construction, On-Site Oversight & Trade Consulting</title>
    <meta name="description" content="@yield('meta_description', 'Independent construction consulting across pre-construction planning, on-site oversight, and specialized trade consulting.')">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
