<?php

namespace App\Controladores;

use PDOException;

class InicioController extends Controller
{

    public function inicioIndex()
    {
        $this->view('pagInicial/pagInicial');
    }
}
