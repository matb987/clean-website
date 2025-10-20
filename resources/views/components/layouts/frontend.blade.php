<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css', 'resources/js/app.js')
        <title>{{ $title ?? 'Spotless Solutions' }}</title>
    </head>
    <body class="bg-white font-sans">

    <nav class="bg-white shadow-lg border-b border-blue-100 py-4 fixed w-full z-20 top-0 left-0" id="main-navbar">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-blue-900">Spotless Solutions</a>
                <ul class="flex space-x-6">
                    <li><a href="/" class="text-white font-bold text-lg px-4 py-2 rounded-lg shadow-sm hover:bg-blue-600 hover:text-green-200 transition">Home</a></li>
                    <li><a href="#services" class="text-white font-bold text-lg px-4 py-2 rounded-lg shadow-sm hover:bg-blue-600 hover:text-green-200 transition">Services</a></li>
                    <li><a href="#contact" class="text-white font-bold text-lg px-4 py-2 rounded-lg shadow-sm hover:bg-blue-600 hover:text-green-200 transition">Contact</a></li>
                </ul>
            </div>
        </nav>
                <!-- Remove JS color inversion for reliability. Use white text on dark backgrounds, blue on light backgrounds. -->
        <main>
            {{ $slot }}
        </main>
    </body>
    </html>
</div>
