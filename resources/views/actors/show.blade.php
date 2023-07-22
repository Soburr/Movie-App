@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            {{-- <img src="{{ $movie['poster_path'] }}" alt="Poster" class="w-64 md:w-96"> --}}
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Will Smith</h2>
                <div class="flex flex-wrap items text-gray-400 text-sm">
                    <i class="fa-solid fa-star"></i>
                    <span class="ml-1">Stuff</span>
                    <span class="mx-2">|</span>
                    <span>More Stuff</span>
                    <span class="mx-2">|</span>
                    
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Quaerat at, laborum fugit excepturi dolorum labore assumenda aut
                     itaque dicta, necessitatibus ipsam, voluptatibus sequi deserunt a
                     dipisci maiores. Ducimus earum non optio?
                </p>
            </div>
        </div>
    </div>
    {{-- END MOVIE INFO --}}

    {{-- CREDITS --}}
    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>

        </div>
    </div>

       {{-- END CREDITS --}}
@endsection
