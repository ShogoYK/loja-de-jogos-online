<?php

namespace App\Controladores;

include_once __DIR__ . '/../modelos/Jogo.php';

use App\Modelos\Jogo;
use PDOException;

class JogoController extends Controller
{

    function __construct()
    {
    }

    public function cadastrarJogoIndex()
    {
        $this->view('cadastroJogo/cadastroJogo');
    }

    public function cadastrar()
    {
        try {
            $jogo = new Jogo($_POST['nomeJogo'], $_POST['descricao'], $_POST['preco']);
            var_dump($jogo);
            $jogo->salvar();
            header('Location: ' . BASEPATH . 'jogo/cadastrar?nomeJogo=' . $_POST['nomeJogo'] . '&mensagem=Jogo cadastrado com sucesso!');
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function info($idJogo): void
    {
        $jogo = Jogo::buscarJogoId($idJogo);
        $this->view('infoJogo/infoJogo', $jogo);
    }

    public function listar(): void
    {
        $jogos = Jogo::buscarTodos();
        $this->view('listAll/listAll', $jogos);
    }

    public function remove(): void
    {
        $jogo = Jogo::buscarJogo($_POST['nomeJogo']);
        try {
            $jogo->deletar($_POST['nomeJogo']);
            header('Location: /jogo/listar?mensagem=Jogo deletado com sucesso!');
        } catch (PDOException $e) {
            header("Location: /jogo/listar?mensagem=Erro ao deletar" . $_GET['nomeJogo'] . ' !');
        }
    }
}
