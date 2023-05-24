<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class BookController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('pages.home', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('pages.show', compact('movie'));
    }
}
