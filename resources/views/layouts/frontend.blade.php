<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Spotless Solutions')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-green-50 font-sans">
    <nav class="bg-gradient-to-r from-blue-100 via-white to-green-100 shadow-lg py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/">
                <img src="/storage/images/logo.webp" alt="Spotless Solutions Logo" class="h-12 w-auto rounded-full shadow" />
            </a>
            <ul class="flex space-x-6">
                <li><a href="/" class="text-blue-700 hover:text-green-600 font-semibold">Home</a></li>
                <li><a href="#services" class="text-blue-700 hover:text-green-600 font-semibold">Services</a></li>
                <li><a href="#contact" class="text-blue-700 hover:text-green-600 font-semibold">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
