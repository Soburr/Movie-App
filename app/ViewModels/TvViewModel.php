<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{

    public $popularTv;
    public $topRated;
    public $airingToday;

    public function __construct($popularTv, $topRated, $airingToday)
    {
        $this->popularTv = $popularTv;
        $this->topRated = $topRated;
        $this->airingToday = $airingToday;
    }

    public function popularTv () {
        return collect($this->popularTv)->merge([

        ]);
    }

    public function topRated () {
        return collect($this->topRated)->merge([

        ]);
    }

    public function airingToday () {
        return collect($this->airingToday)->merge([

        ]);
    }
}
