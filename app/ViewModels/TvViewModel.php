<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{

    public $popularTv;
    public $topRated;
    public $airingToday;
    public $genres;
    public function __construct($popularTv, $topRated, $airingToday, $genres)
    {
        $this->popularTv = $popularTv;
        $this->topRated = $topRated;
        $this->airingToday = $airingToday;
        $this->genres = $genres;
    }

    public function popularTv () {
            return $this->formatTv($this->popularTv);
    }

    public function topRated () {
        return $this->formatTv($this->topRated);
    }

    public function airingToday () {
        return $this->formatTv($this->airingToday);
    }

    public function genres() {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
         });
    }

    private function formatTv($tv)
    {
        return collect($tv)->map(function ($tvShow) {
            $genresFormatted = collect($tvShow['genre_ids'])->mapWithKeys(function($value) {
               return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($tvShow)->merge([
              'poster_path' => 'https://image.tmdb.org/t/p/w500'.$tvShow['poster_path'],
              'vote_average' => $tvShow['vote_average'] * 10 . '%',
              'first_air_date' => Carbon::parse($tvShow['first_air_date'])->format('M d, Y'),
              'genres' => $genresFormatted,
            ])->only([
              'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'overview', 'first_air_date', 'genres'
            ]);
          });
    }

}
