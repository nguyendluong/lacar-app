<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'L/A CAR - Thuê xe tự lái')</title>

    <!-- Tailwind CSS (CDN for quick testing) -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Very light gray */
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col font-sans">
    
    <!-- Navbar -->
    @include('layouts.header')

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>
