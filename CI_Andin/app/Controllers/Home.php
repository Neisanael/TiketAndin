<?php

namespace App\Controllers;

use App\Models\Movies;
use App\Models\Users;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Homepage';
        $moviesModel = new Movies();
        $data['movies'] = $moviesModel->findAll();
        return view('pages/homepage', $data);
    }
    public function login()
    {
        if (session()->has('logged_in') && session()->get('logged_in') === true) {
            return $this->index();
        }
        $data['title'] = 'Login Tiket App';
        return view('pages/login', $data);
    }
    public function register()
    {
        $data['title'] = 'Register Tiket App';
        return view('pages/register', $data);
    }
    public function about()
    {
        $data['title'] = 'About Tiket App';
        return view('pages/about', $data);
    }
}
