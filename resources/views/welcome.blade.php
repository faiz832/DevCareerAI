<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('layouts.navbar')
    <div class="h-[500px] bg-blue-400">
        <div class="max-w-[1200px] mx-auto">
            <div class="flex items-center justify-center h-24">
                <h1 class="text-black text-3xl">Home page</h1>
            </div>
        </div>
    </div>
    <script>
        const navbar = document.getElementById('navbar');

        // Scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                navbar.classList.add('border-b', 'border-slate-200', 'shadow-md');
            } else {
                navbar.classList.remove('border-b', 'border-slate-200', 'shadow-md');
            }
        });
    </script>
</body>

</html>
