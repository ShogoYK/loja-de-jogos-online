<?php

namespace App\Modelos;

use App\Database;

/**
 * Classe reponsável por representar os dados de um usuário na aplicação
 */
class Jogo
{
    private $idJogo;
    private $nomeJogo;
    private $descricao;
    private $preco;
    private $localImagem;

    /**
     *  Contrutor da classe, responsável por inicializar os dados.
     */
    function __construct(string $nomeJogo, string $descricao, float $preco)
    {
        $this->nomeJogo = $nomeJogo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->localImagem = "/public/images/lol.jpg";
    }

    /**
     *  Método get genérico para todos os campos
     */
    public function __get($campo)
    {
        return $this->$campo;
    }

    /**
     *  Método set genérico para todos os campos
     */
    public function __set($campo, $valor)
    {
        return $this->$campo = $valor;
    }

    /**
     *  Função que salva os dados do Jogo no banco de dados
     */
    public function salvar(): void
    {
        $con = Database::getConnection();

        $stm = $con->prepare('INSERT INTO jogos(nomeJogo, descricao, preco, localImagem) VALUES(:nomeJogo, :descricao, :preco, :localImagem)');
        $stm->bindValue(':nomeJogo', $this->nomeJogo);
        $stm->bindValue(':descricao', $this->descricao);
        $stm->bindValue(':preco', $this->preco);
        $stm->bindValue(':localImagem', $this->localImagem);
        $stm->execute();
    }


    /**
     *  Função que busca por um usuário a partir do email fornecido.
     *  Se não existir, retorna NULL.
     */
    static public function buscarJogo($nomeJogo): ?Jogo
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT nomeJogo, descricao, preco, localImagem FROM jogos WHERE nomeJogo = :nomeJogo');
        $stm->bindParam(':nomeJogo', $nomeJogo);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $jogo = new Jogo($resultado['nomeJogo'], $resultado['descricao'], $resultado['preco'], $resultado['localImagem']);
            return $jogo;
        } else {
            return NULL;
        }
    }
    static public function buscarjogoId($idJogo): ?Jogo
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT idJogo, nomeJogo, descricao, preco, localImagem FROM jogos WHERE idJogo = :idJogo');
        $stm->bindParam(':idJogo', $idJogo);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $jogo = new Jogo($resultado['nomeJogo'], $resultado['descricao'], $resultado['preco'], $resultado['localImagem']);
            $jogo->idJogo = $idJogo;
            return $jogo;
        } else {
            return NULL;
        }
    }


    /**
     * 
     * Função que retorna todos os Jogos cadastrados.
     * 
     * @return Jogo[]
     * 
     */
    static public function buscarTodos(): array
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT idJogo, nomeJogo, descricao, preco, localImagem FROM jogos');
        $stm->execute();

        $resultados = [];

        while ($resultado = $stm->fetch()) {
            $jogo = new Jogo($resultado['nomeJogo'], $resultado['descricao'], $resultado['preco'], $resultado['localImagem']);
            $jogo->idJogo = $resultado['idJogo'];
            array_push($resultados, $jogo);
        }

        return $resultados;
    }

    /**
     *  Função que deleta um Jogo no banco.
     */
    public function deletar($nomeJogo)
    {
        $con = Database::getConnection();
        $stm = $con->prepare('DELETE FROM jogos WHERE nomeJogo = :nomeJogo');
        $stm->bindParam(':nomeJogo', $nomeJogo);
        $stm->execute();
    }
}
