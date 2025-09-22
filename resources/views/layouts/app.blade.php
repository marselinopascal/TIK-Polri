<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TIK POLRI') - TIK POLRI</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 tech-pattern tech-grid font-poppins flex flex-col">

    {{-- Memanggil Header --}}
    @include('partials.header')

    {{-- Area Konten yang Akan Diisi oleh Halaman Lain --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Memanggil Footer --}}
    @include('partials.footer')
    
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>