<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TvShowsCard extends Component
{
    public $tvShow;
    public function __construct($tvShow)
    {
        $this->tvShow = $tvShow;
    }


    public function render()
    {
        return view('components.tv-shows-card');
    }
}
