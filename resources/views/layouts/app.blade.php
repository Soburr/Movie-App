<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie App</title>
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  @vite('resources/css/app.css')
  @livewireStyles
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-gray-880">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
          <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="{{ route('movie.index') }}">MOVIE APP</a>
            </li>

            <li class="md:ml-20 mt-3 md:mt-0">
                <a href="{{ route('movie.index') }}" class="hover:text-gray-300">Movies</a>
            </li>

            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
            </li>

            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{ route('actor.index') }}" class="hover:text-gray-300">Actors</a>
            </li>
          </ul>
          <div class="flex flex-col md:flex-row items-center">
          <livewire:search-dropdown />
          </div>
          <div class="md:ml-4 mt-3 md:mt-0">
             <a href="#">
                <img src="{{ asset('img/avatar.jpeg')}}" class="rounded-full w-8 h-8" alt="avatar">
             </a>
          </div>

        </div>

    </nav>
     @yield('content')
     @livewireScripts
     @yield('scripts')
</body>
</html>
