@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-20 pt-16">

    {{-- POPULAR TV --}}
        <div class="popular-TV">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular TV Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                @foreach ($popularTv as $tvShow)
                   <x-tv-shows-card :tvShow="$tvShow" />
                @endforeach



            </div>
        </div>

    {{-- END POPULAR TV--}}

    {{-- TOP RATED --}}

         <div class="top-rated-series py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

                @foreach ($topRated as $tvShow)
                   <x-tv-shows-card :tvShow="$tvShow" />
                @endforeach

            </div>
         </div>

    {{-- END TOP RATED --}}

       {{-- AIRING TODAY --}}

       <div class="airing-today py-24">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Airing Today</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">

            @foreach ($airingToday as $tvShow)
               <x-tv-shows-card :tvShow="$tvShow" />
            @endforeach

        </div>
     </div>

{{-- END AIRING TODAY --}}

    </div>
@endsection
