<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie App</title>
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  @vite('resources/css/app.css')
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
                <a href="#" class="hover:text-gray-300">TV Shows</a>
            </li>

            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="#" class="hover:text-gray-300">Actors</a>
            </li>
          </ul>

          <div class="flex flex-col md:flex-row items-center">
            <div class="relative mt-3 md:mt-0">
                <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 focus:outline-none focus:shadow:outline  pl-8" placeholder="Search">
                {{-- <div>
                   <font-awesome-icon :icon="['fasr', 'magnifying-glass']" beat />
                   <i class="fa-solid fa-copy"></i>
                </div> --}}
            </div>
          </div>

          <div class="md:ml-4 mt-3 md:mt-0">
             <a href="#">
                <img src="{{ asset('img/avatar.jpeg')}}" class="rounded-full w-8 h-8" alt="avatar">
             </a>
          </div>

        </div>

    </nav>
     @yield('content')
</body>
</html>
