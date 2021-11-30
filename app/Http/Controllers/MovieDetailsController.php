<?php

namespace App\Http\Controllers;
use App\Movie;
Use App\Genre;
Use App\Episode;
use Illuminate\Http\Request;

class MovieDetailsController extends Controller
{
    public function show($movie_id){
        $episodes = Episode::where('movie_id',$movie_id)->paginate(3);
        $genres = Genre::all();
        $movies = Movie::where('id',$movie_id)->get();

        return view('mdetails',['episodes' => $episodes,'movies' => $movies, 'genres' => $genres]);
    }



}
