<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Cuidador;
use App\Models\Filme;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function cuidador()
    {
        $cuidadorModel = new Cuidador();
        $cuidador['cuidador'] = $cuidadorModel->findAll();
        //dd($cuidador);
        return view('cuidador', $cuidador);
    }

    public function filmes()
    {
        $filmesModel = new Filme();
        $filmes['filmes'] = $filmesModel->findAll();
        //dd($filmes);
        return view('filmes', $filmes);
    }
}
