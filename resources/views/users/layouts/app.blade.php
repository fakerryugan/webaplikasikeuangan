<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 font-sans antialiased">

    {{-- Konten halaman akan ditampilkan di sini --}}
    <main>
        @yield('content')
    </main>

    {{-- Include bottom navigation di luar <main> --}}
    @include('users.layouts.bottomnav')

</body>
</html>