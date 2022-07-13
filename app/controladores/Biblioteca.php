<?php

namespace App\Controladores;


include_once __DIR__ . '/../modelos/Biblioteca.php';

use App\Modelos\Biblioteca;
use PDOException;

class BibliotecaController extends Controller
{

    public function bibliotecaIndex(): void
    {
        // $biblioteca = Biblioteca::getJogosByBiblioteca();
        $this->view('biblioteca/biblioteca');
    }

    public function todosIndex()
    {
        $this->view('/listAll/listAll');
    }
}
