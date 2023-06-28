<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Movies;

class OrderController extends BaseController
{
    public function index()
    {
        //
    }
    public function insert($param)
    {
        $jsonData = file_get_contents('php://input');
        $myArray = json_decode($jsonData);
        echo json_encode($myArray);
        echo json_encode($param);
    }
}
