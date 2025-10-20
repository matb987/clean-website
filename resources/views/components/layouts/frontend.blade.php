<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css', 'resources/js/app.js')
        <title>{{ $title ?? 'Spotless Solutions' }}</title>
    </head>
    <body class="bg-black font-sans">

    <nav class="backdrop-blur-lg bg-white/10 border border-purple-700/40 shadow-xl rounded-2xl mx-2 mt-4 py-3 px-4 fixed w-[calc(100%-1rem)] z-20 top-0 left-0 flex items-center justify-center" id="main-navbar">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center gap-2">
                <img src="/storage/images/logo-small.png" alt="Spotless Solutions Logo" class="h-10 w-10 rounded-full shadow-md bg-black/60" />
                <span class="text-2xl font-extrabold text-purple-300 tracking-wide drop-shadow">Spotless Solutions</span>
            </a>
            <!-- Hamburger -->
            <button class="md:hidden flex items-center px-3 py-2 border border-purple-700 rounded-lg text-purple-300 bg-black/30 hover:bg-purple-800/30 transition" id="nav-toggle">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
            <ul class="hidden md:flex space-x-4" id="nav-menu">
                <li><a href="/" class="text-purple-100 font-semibold text-lg px-4 py-2 rounded-xl hover:bg-purple-700/60 hover:text-white focus:outline-none focus:ring-2 focus:ring-purple-400 transition">Home</a></li>
                <li><a href="#services" class="text-purple-100 font-semibold text-lg px-4 py-2 rounded-xl hover:bg-purple-700/60 hover:text-white focus:outline-none focus:ring-2 focus:ring-purple-400 transition">Services</a></li>
                <li><a href="#contact" class="text-purple-100 font-semibold text-lg px-4 py-2 rounded-xl hover:bg-purple-700/60 hover:text-white focus:outline-none focus:ring-2 focus:ring-purple-400 transition">Contact</a></li>
            </ul>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navToggle = document.getElementById('nav-toggle');
                const navMenu = document.getElementById('nav-menu');
                navToggle.addEventListener('click', function() {
                    navMenu.classList.toggle('hidden');
                });
            });
        </script>
    </nav>
                <!-- Remove JS color inversion for reliability. Use white text on dark backgrounds, blue on light backgrounds. -->
        <main class="pt-24 md:pt-20">
            {{ $slot }}
        </main>
    </body>
    </html>
</div>
