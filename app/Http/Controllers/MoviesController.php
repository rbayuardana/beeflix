<?php

namespace App\Http\Controllers;
use App\Movie;
use App\Genre;
use App\Episode;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $genres = Genre::all();

        return view('index', compact('movies','genres'));
    }
}
