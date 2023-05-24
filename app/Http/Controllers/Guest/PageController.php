<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function movies()
    {
        $movies = Movie::orderByDesc('id')->get();
    //    dd($movies);
        return view('movies', compact('movies'));

    }
    public function about(){
        return view('about');
    }
}
