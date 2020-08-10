<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Video Game</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/config.css') }}" rel="stylesheet">
    {{-- Alpine JS --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireStyles
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
           <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <p class="font-bold">Game Trailer</p>
                </a>
                <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                    <li><a href="#" class="hover:text-gray-400">Game</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming soon</a></li>
                </ul>
           </div>
           <div class="flex items-center mt-6 lg:mt-0">
            <livewire:search-dropdown>

               <div class="ml-6">
                    <a href="#"><img src="/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8"></a>
               </div>
           </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered By <a href="https://api.igdb.com" class="underline hover:text-gray-400">IGDB API</a>
        </div>
    </footer>

    @livewireScripts

    <script src="/js/app.js"></script>
    @stack('scripts')
</body>
</html>
