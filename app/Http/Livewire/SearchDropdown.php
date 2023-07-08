<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = 'Endgame';
    public function render()
    {
        $searchResults = [];

        $searchResults = Http::WithToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/search/movie', [
            'api_key' => '3b4fe8770b14286764e9831d57b2a3d5',
        ]);

        dump($searchResults);

        return view('livewire.search-dropdown', [
            'searchResults' => $searchResults,
        ]);
    }

}
