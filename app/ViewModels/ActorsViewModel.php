<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{
    public $popularActors;
    public function __construct($popularActors)
    {
        $this->popularActors = $popularActors;
    }

    public function popularActors() {
        return collect($this->popularActors)->dump();
    }

}
