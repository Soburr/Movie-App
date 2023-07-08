<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /** @test */
   public function the_main_page_shows_correct_info()
   {

     $response = $this->get(route('movie.index'));

     $response->assertStatus(200);

   }
}
