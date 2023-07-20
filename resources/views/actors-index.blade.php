@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 pt-16">
    {{-- POPULAR MOVIES --}}
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                @foreach ($popularActors as $actors)
                <div class="actor mt-8">
                  <a href="#">
                    <img src="" alt="profile image" class="hover-opacity-75 transition ease-in-out duration-150">
                  </a>
                </div>
                <div class="mt-">
                   <a href="#" class="text-lg hover:text-gray-300">{{ $actors['name'] }}</a>
                   <div class="text-sm trucate text-gray-400"></div>
                </div>
                @endforeach

            </div>
        </div>

    {{-- END POPULAR MOVIES --}}
    </div>
@endsection
