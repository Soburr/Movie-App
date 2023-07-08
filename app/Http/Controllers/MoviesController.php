<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index() {
      $popularMovies = Http::WithToken(config('services.tmdb.token'))
                         ->get('https://api.themoviedb.org/3/discover/movie/?api_key=3b4fe8770b14286764e9831d57b2a3d5')
                         ->json()['results'];

      $nowPlaying = Http::WithToken(config('services.tmdb.token'))
                         ->get('https://api.themoviedb.org/3/movie/now_playing?api_key=3b4fe8770b14286764e9831d57b2a3d5')
                         ->json()['results'];

      $genresArray = Http::WithToken(config('services.tmdb.token'))
                         ->get('https://api.themoviedb.org/3/genre/movie/list?api_key=3b4fe8770b14286764e9831d57b2a3d5')
                         ->json()['genres'];

      $genres = collect($genresArray)->mapWithKeys(function ($genre) {
         return [$genre['id'] => $genre['name']];
      });

    //   dump($nowPlaying);

      return view('index', [
        'popularMovies' => $popularMovies,
        'nowPlaying' => $nowPlaying,
        'genres' => $genres,
      ]);
    }

    public function show($movieId) {

        $movie = Http::WithToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/' . $movieId, [
            'api_key' => '3b4fe8770b14286764e9831d57b2a3d5',
            'append_to_response' => 'credits,images,videos',
        ])->json();

        // dump($movie);

        return view('show', [
            'movie' => $movie,
        ]);
    }

}
