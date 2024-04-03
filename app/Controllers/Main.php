<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function cuidador()
    {
        return view('cuidador');
    }

    public function filmes()
    {
        return view('filmes');
    }
}
