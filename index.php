<?php

define('BASEPATH', '/');

include_once __DIR__ . '/app/Database.php';
include_once __DIR__ . '/app/controladores/Controlador.php';
include_once __DIR__ . '/app/controladores/Biblioteca.php';
include_once __DIR__ . '/app/controladores/Login.php';
include_once __DIR__ . '/app/controladores/Inicio.php';
include_once __DIR__ . '/app/controladores/Jogo.php';
include_once __DIR__ . '/libs/Route.php';

use App\Database;
use App\Controladores\BibliotecaController;
use App\Controladores\InicioController;
use App\Controladores\JogoController;
use App\Controladores\LoginController;
use Steampixel\Route;

//Database::createSchema();

$login = new LoginController();
$biblioteca = new BibliotecaController();
$pagInicial = new InicioController();
$jogo = new JogoController();

Route::add('/register', fn () => $login->cadastrarIndex(), ['get']);
Route::add('/login', fn () => $login->loginIndex(), ['get']);
Route::add('/user/info', fn () => $login->info(), ['get']);
Route::add('/pagInicial', fn () => $pagInicial->inicioIndex(), ['get']);
Route::add('/biblioteca', fn () => $biblioteca->bibliotecaIndex(), ['get']);
Route::add('/jogo/cadastrar', fn () => $jogo->cadastrarJogoIndex(), ['get']);
Route::add('/jogo/listar', fn () => $jogo->listar(), ['get']);
Route::add('/jogo/info/([0-9]*)', fn ($idJogo) => $jogo->info($idJogo), ['get']);
//Carrinho
//Route::add('/precarrinho/([0-9]*/0'), fn () => 

Route::add('/login', fn () => $login->login(), ['post']);
Route::add('/register', fn () => $login->cadastrar(), ['post']);
Route::add('/logout', fn () => $login->sair(), ['post']);
Route::add('/jogo/cadastrar', fn () => $jogo->cadastrar(), ['post']);
Route::add('/jogo/listar/remove', fn () => $jogo->remove(), ['post']);

Route::add('/', function () {
    header('Location: ' . BASEPATH . 'pagInicial');
}, ['get']);

Route::run(BASEPATH);
