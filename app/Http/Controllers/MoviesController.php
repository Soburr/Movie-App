<?php

namespace App\Http\Controllers;

use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index() {
      $popularMovies = Http::WithToken(config('services.tmdb.token'))
                         ->get('https://api.themoviedb.org/3/discover/movie')
                         ->json()['results'];

      $nowPlaying = Http::WithToken(config('services.tmdb.token'))
                         ->get('https://api.themoviedb.org/3/movie/now_playing')
                         ->json()['results'];

      $genres = Http::WithToken(config('services.tmdb.token'))
                         ->get('https://api.themoviedb.org/3/genre/movie/list')
                         ->json()['genres'];

    //   $genres = collect($genresArray)->mapWithKeys(function ($genre) {
    //      return [$genre['id'] => $genre['name']];
    //   });

    //   dump($nowPlaying);

    //   return view('index', [
    //     'popularMovies' => $popularMovies,
    //     'nowPlaying' => $nowPlaying,
    //     'genres' => $genres,
    //   ]);
    // }

    $viewModel = new MoviesViewModel(
        $popularMovies,
        $nowPlaying,
        $genres,
    );

    return view('movies.index', $viewModel);
     }


    public function show($movieId) {

        $movie = Http::WithToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/' . $movieId, [
            'append_to_response' => 'credits,images,videos',
        ])->json();

    $viewModel = new MovieViewModel($movie);
        return view('movies.show', $viewModel);
    }

}
