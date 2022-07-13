<?php

namespace App\Modelos;

use App\Database;

/**
 * Classe reponsável por representar os dados de uma biblioteca de Jogos de um Usuário na aplicação
 */
class Biblioteca
{
    private $codBiblioteca;
    private $codUsuario;
    private $idJogo;
    private $dataAquisicao;

    /**
     *  Contrutor da classe, responsável por inicializar os dados.
     */
    function __construct(string $codUsuario, string $idJogo, float $dataAquisicao)
    {
        $this->codUsuario = $codUsuario;
        $this->idJogo = $idJogo;
        $this->dataAquisicao = $dataAquisicao;
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
     *  Função que salva os dados do Usuário no banco de dados
     */
    public function salvar(): void
    {
        $con = Database::getConnection();

        $stm = $con->prepare('INSERT INTO biblioteca(codusuario, idjogo, dataaquisicao) VALUES(:codusuario, :idjogo, :dataaquisicao)');
        $stm->bindValue(':codusuario', $this->codusuario);
        $stm->bindValue(':idjogo', $this->idjogo);
        $stm->bindValue(':dataaquisicao', $this->dataaquisicao);
        $stm->execute();
    }


    /**
     *  Função que busca por uma Bliblioteca a partir do Usuário fornecido.
     *  Se não existir, retorna NULL.
     */
    static public function buscarBiblioteca($usuario): ?Jogo
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT codBiblioteca, codUsuario, idJogo, dataAquisicao FROM biblioteca WHERE codUsuario = :usuario');
        $stm->bindParam(':usuario', $usuario->codUsuario);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $biblioteca = new Biblioteca($resultado['codUsuario'], $resultado['idJogo'], $resultado['dataAquisicao']);
            return $biblioteca;
        } else {
            return NULL;
        }
    }


    /**
     * 
     * Função que retorna todas as Bibliotecas de usuário.
     * 
     * @return Biblioteca[]
     * 
     */
    static public function buscarTodos(): array
    {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT codUsuario, idJogo, dataAquisicao FROM biblioteca limit 100');
        $stm->execute();

        $resultados = [];

        while ($resultado = $stm->fetch()) {
            $jogo = new Jogo($resultado['codUsuario'], $resultado['idJogo'], $resultado['dataAquisicao']);
            array_push($resultados, $jogo);
        }

        return $resultados;
    }

    // static public function getJogosByBiblioteca(): array
    // {
    //     $con = Database::getConnection();
    //     $QL = 'SELECT idJogo, nomeJogo, descricao, preco, localImagem, dataAquisicao FROM biblioteca ';
    //     $QL .= 'LEFT JOIN jogos ON biblioteca.idJogo = jogos.idJogo';
    //     $QL .= 'ORDER BY dataAquisicao';
    //     $stm = $con->prepare($QL);
    //     $stm->execute();

    //     $resultados = [];

    //     while ($resultado = $stm->fetch()) {
    //         $jogo = new Jogo($resultado['nomeJogo'], $resultado['descricao'], $resultado['preco'], $resultado['localImagem']);
    //         array_push($resultados, $jogo);
    //     }

    //     return $resultados;
    // }


    /**
     *  Função que deleta um Biblioteca no banco.
     */
    public function deletar($codUsuario)
    {
        $con = Database::getConnection();
        $stm = $con->prepare('DELETE FROM biblioteca WHERE codUsuario = :codUsuario');
        $stm->bindParam(':codUsuario', $codUsuario);
        $stm->execute();
    }
}
