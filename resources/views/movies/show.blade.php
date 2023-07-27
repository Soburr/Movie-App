@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-20 py-16 flex flex-col md:flex-row">
            <img src="{{ $movie['poster_path'] }}" alt="Poster" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex flex-wrap items text-gray-400 text-sm">
                    <i class="fa-solid fa-star"></i>
                    <span class="ml-1">{{ $movie['vote_average']  }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie['release_date'] }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        {{ $movie['genres'] }}
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['crew'] as $crew)

                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>

                        @endforeach
                    </div>
                </div>

                <div x-data="{ open: false }">
                    @if (count($movie['videos']['results']) > 0)
                        <div class="mt-12">
                            <button @click="open = true"
                                class="flex inline-flex items-center bg-orange-500 text-gray-900
                    rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">Play
                                Trailer</button>
                        </div>
                    @endif

                    <div style="background-color: rgba(0, 0, 0, .5);"
                        class="fixed top-0 left-0 w-full h-full items-center shadow-lg overflow-y-auto"
                        x-show.transition.opacity="open">

                        <div class="container" mx-auto lg:px-32 rounded-lg overflow-y-auto>
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="open = false"
                                        class="text-3xl leading-none hover:text-gray-300">&times;</button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                        <iframe width="560" height="315"
                                            class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                            src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}"
                                            style="border: 0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- END MOVIE INFO --}}

    {{-- CAST --}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-20 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                @foreach ($movie['cast'] as $cast)

                        <div class="mt-8">
                            <a href="{{ route('actors.show', $cast['id']) }}">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500' . $cast['profile_path'] }}" alt="Poster"
                                    class="w-64 md:w-96">
                            </a>
                            <div class="mt-2">
                                <a href="{{ route('actors.show', $cast['id']) }}" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                                <div class="text-gray-400 text-sm">{{ $cast['character'] }}</div>
                            </div>
                        </div>

                @endforeach

            </div>
        </div>
    </div>
    {{-- END CAST --}}

    {{-- IMAGES --}}

    <div class="movie-images" x-data="{ open: false, image: '' }">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @foreach ($movie['images'] as $image)

                        <div class="mt-8">
                            <a @click.prevent="
                    open = true
                    image = '{{ 'https://image.tmdb.org/t/p/original' . $image['file_path'] }}'"
                                href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500' . $image['file_path'] }}" alt="Poster"
                                    class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>

                @endforeach
            </div>

            <div style="background-color: rgba(0, 0, 0, .5);"
                class="fixed top-0 left-0 w-full h-full items-center shadow-lg overflow-y-auto"
                x-show.transition.opacity="open">
                <div class="container" mx-auto lg:px-32 rounded-lg overflow-y-auto>
                    <div class="bg-gray-900 rounded">
                        <div class="flex justify-end pr-4 pt-2">
                            <button @click="open = false" @keydown.escape.window="open = false"
                                class="text-3xl leading-none hover:text-gray-300">&times;</button>
                        </div>
                        <div class="modal-body px-8 py-8">
                            <img :src="image" alt="poster">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- END IMAGES --}}
@endsection
