<?php

namespace App\Http\Controllers;
Use App\Movie;
Use App\Genre;
use Illuminate\Http\Request;

class GenreDetailsController extends Controller
{
    public function index($genre_id){
        $movies= Movie::where('genre_id', $genre_id)->get();
        $genres = Genre::where('id', $genre_id)->get();
        return view ('gdetails',['movies'=> $movies, 'genres'=> $genres]);
    }
}
