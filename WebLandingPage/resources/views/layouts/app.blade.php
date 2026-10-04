<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Armonia: Harmoni finansial dan emosional pasangan. Kelola pengeluaran bersama, sinkronisasi tabungan, dan pantau mood harian dalam satu sentuhan harmonis.">
    <title>Armonia - Harmoni Finansial &amp; Emosional Pasangan</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo-armonia.png') }}">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-950 text-neutral-100 font-sans antialiased selection:bg-terracotta selection:text-white min-h-screen flex flex-col overflow-x-hidden">
    {{-- Floating Navbar --}}
    <x-navbar />

    {{-- Main Content Slot --}}
    <main class="flex-grow">
        {{ $slot ?? '' }}
        @yield('content')
    </main>
</body>
</html>
