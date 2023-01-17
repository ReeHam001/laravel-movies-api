<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{

    public function index()
    {
        return view('movies.index');
    }

    public function show($id)
    {
    }
}
