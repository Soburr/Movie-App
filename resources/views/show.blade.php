@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="Scream" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex flex-wrap items text-gray-400 text-sm">
                    <i class="fa-solid fa-star"></i>
                    <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }}@if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Jhoon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button
                        class="flex items-center bg-orange-500 text-gray-900
                     rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">Play
                        Trailer</button>
                </div>

            </div>
        </div>
    </div>
    {{-- END MOVIE INFO --}}

    {{-- CAST --}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400 text-sm">John Doe</div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400 text-sm">John Doe</div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400 text-sm">John Doe</div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400 text-sm">John Doe</div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="text-gray-400 text-sm">John Doe</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- END CAST --}}

    {{-- IMAGES --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="{{ asset('img/Scream.jpg') }}" alt="Scream"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- END IMAGES --}}
@endsection
