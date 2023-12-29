<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kisah Cinta Anak Bangsa - {{ config('app.name', 'Laravel') }}</title>

    {{-- seo --}}
    <meta name="description"
        content="Bucin bukan sekadar aplikasi kencan biasa. Bucin adalah penjalin hubungan, penyemangat hati, dan pemberi dukungan dalam pencarian cinta sejati. Bucin percaya cinta adalah bahasa universal yang menghubungkan kita sebagai anak bangsa, dan setiap sudut negara ini memiliki kisah cinta tak terhitung.">
    <meta name="keywords"
        content="bucin, kisah cinta, kisah cinta anak bangsa, kisah cinta indonesia, kisah cinta terbaik, kisah cinta terindah, kisah cinta sedih, kisah cinta romantis, kisah cinta sedih, kisah cinta nyata, kisah cinta sejati, kisah cinta terbaru, kisah cinta sedih">
    <meta name="author" content="CV Abdi Darma Perkasa">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- icons --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/favicons/android-icon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicons/apple-icon-180x180.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="{{ asset('build/manifest.webmanifest') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <x-organisms.top-navigation></x-organisms.top-navigation>
    <div class="min-h-screen pt-[76px]">
        <main>
            {{ $slot }}
        </main>
    </div>

    <x-organisms.footer></x-organisms.footer>
</body>

</html>
