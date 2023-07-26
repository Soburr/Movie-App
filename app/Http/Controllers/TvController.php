<?php

namespace App\Http\Controllers;

use App\ViewModels\TvViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{

    public function index()
    {
        $popularTv = Http::WithToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/tv')
        ->json()['results'];

        $topRated = Http::WithToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/top_rated')
        ->json()['results'];

        $airingToday = Http::WithToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/airing_today')
        ->json()['results'];

        $genres = Http::WithToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list')
        ->json()['genres'];


        // dump($popularTv);


        $viewModel = new TvViewModel(

            $popularTv,
            $topRated,
            $airingToday,
            $genres,

        );
        return view('tv.index', $viewModel);
    }



    public function show($id)
    {
        //
    }


}
