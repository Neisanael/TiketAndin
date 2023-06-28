<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Movies;
use App\Models\Tikets;

class TiketController extends BaseController
{
    public function index($param)
    {
        $moviesModel = new Movies();
        $movie = $moviesModel->where('id', $param)->first();
        $data['title'] = $movie['judul'];
        $data['movies'] = $movie;
        $ticketModel = new Tikets();
        $tiket = $ticketModel->findAll();
        $data['tickets'] = $tiket;
        return view ('pages/tiket', $data);
    }
}
