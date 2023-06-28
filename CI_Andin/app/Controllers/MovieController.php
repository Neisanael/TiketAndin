<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Movies;

class MovieController extends BaseController
{
    public function index($param)
    {
        $moviesModel = new Movies();
        $movie = $moviesModel->where('id', $param)->first();
        $data['title'] = $movie['judul'];
        $data['movies'] = $movie;
        return view ('pages/movies', $data);
    }
}
