<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SiRoma - Sistem Roma Ahlinya')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header')
    
    <main class="main-content">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>