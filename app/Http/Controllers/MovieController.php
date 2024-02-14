<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();

		return view('mainPage', compact('movies'));
	}

    public function infoShow($id){
        $movies = Movie::all();
        $movie = $movies->find($id);

        return view('infoShow', compact('movie'));
    }
}
