<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Spotless Solutions')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-50 font-sans">
    <nav class="bg-white shadow py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-blue-900">Spotless Solutions</a>
            <ul class="flex space-x-6">
                <li><a href="/" class="text-blue-700 hover:text-blue-900">Home</a></li>
                <li><a href="#services" class="text-blue-700 hover:text-blue-900">Services</a></li>
                <li><a href="#contact" class="text-blue-700 hover:text-blue-900">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
