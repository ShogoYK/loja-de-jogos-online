<?php

namespace App\Controladores;

include_once __DIR__ . '/../modelos/Usuario.php';

use App\Modelos\Usuario;
use PDOException;

class LoginController extends Controller
{

    /**
     * @var Usuario
     */
    private $loggedUser;


    function __construct()
    {
        session_start();
        if (isset($_SESSION['user'])) $this->loggedUser = $_SESSION['user'];
    }


    public function loginIndex(): void
    {
        if (!$this->loggedUser) {
            $this->view('user/login/login');
        } else {
            header('Location: ' . BASEPATH . 'user/info');
        }
    }

    public function login(): void
    {
        $usuario = Usuario::buscarUsuario($_POST['email']);
        if ($usuario && $usuario->igual($_POST['email'], $_POST['senha'])) {
            $_SESSION['user'] = $this->loggedUser = $usuario;
            header('Location: ' . BASEPATH . 'user/info');
        } else {
            header('Location ' . BASEPATH .  'login?email=' . $_POST['email'] . '&mensagem=Usuario e/ou senha incorreta!');
        }
    }

    public function cadastrarIndex(): void
    {
        $this->view('user/cadastro/cadastro');
    }

    /**
     *  Função que trata de cadastrar um novo usuário na base de dados (atualmente na sessão).
     *  Verifica se o email já está cadastrado, se sim, informa o usuário.
     */
    public function cadastrar(): void
    {
        try {
            $user = new Usuario($_POST['email'], $_POST['senha'], $_POST['nome']);
            $user->salvar();
            header('Location: ' . BASEPATH . 'login?email=' . $_POST['email'] . '&mensagem=Usuário cadastrado com sucesso!');
        } catch (\Throwable $th) {
            // header('Location: ' . BASEPATH . 'register?email=' . $_POST['email'] . '&mensagem=Email já cadastrado!');
            var_dump($th);
        }
    }

    /**
     *  Função responsável por renderizar as informações do usuário (se estiver logado).
     */
    public function info(): void
    {
        if (!$this->loggedUser) {
            header('Location: ' . BASEPATH . 'login');
            return;
        }
        $this->view('user/info/info', $this->loggedUser);
    }

    /**
     *  Função que remove o usuário da seção (deslogar)
     */
    public function sair(): void
    {
        if (!$this->loggedUser) {
            header('Location: ' . BASEPATH . 'login/login?mensagem=Voce precisa se identificar primeiro');
            return;
        }
        unset($_SESSION['user']);
        header('Location: ' . BASEPATH . 'login');
    }

    /**
     *  Função que lista os usuários da plataforma
     */
    public function listar(): void
    {
        $usuarios = Usuario::buscarTodos();
        $usuarios = array_filter($usuarios, fn ($usuario) => $usuario->email != "suporte@login.com");
        $this->view('users/listar', $usuarios);
    }
}
