<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\MoviesController@index')->name('movie.index');

Route::get('/movies/{movieId}', 'App\Http\Controllers\MoviesController@show')->name('movie.show');

Route::get('/actors', 'App\Http\Controllers\ActorsController@index')->name('actor.index');

Route::get('actors/page/{page?}', 'App\Http\Controllers\ActorsController@index');

Route::get('/actors/{actorId}', 'App\Http\Controllers\ActorsController@show')->name('actors.show');

Route::get('/tv', 'App\Http\Controllers\TvController@index')->name('tv.index');

Route::get('/tv/{tvId}', 'App\Http\Controllers\TvController@show')->name('tv.show');
