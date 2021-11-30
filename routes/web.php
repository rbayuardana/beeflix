<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MoviesController@index');
Route::get('/mdetails/{movie_id}', 'MovieDetailsController@show')->name('movieDetails');
Route::get('/gdetails/{genre_id}', 'GenreDetailsController@index')->name('genreDetails');