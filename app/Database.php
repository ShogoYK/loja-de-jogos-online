<?php

namespace App;

use PDO;
use PDOException;

/**
 *  Classe responsável por fazer a gestão da conexão com o banco.
 */
class Database
{
    static $con;

    static public function getConnection(): PDO
    {
        if (isset(self::$con)) return self::$con;

        self::$con = new PDO("mysql:host=localhost;dbname=progweb", "root", "");
        self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$con;
    }


    static public function createSchema(): void
    {
        $con = self::getConnection();
        $con->exec('
            CREATE TABLE IF NOT EXISTS users
            (
                codusuario int auto_increment not null primary key,
                email Varchar(50),
                nome Varchar(30),
                senha TEXT,
                listaJogos TEXT
            );
            CREATE TABLE IF NOT EXISTS jogos
            (
                idJogo int auto_increment not null primary key,
                nomeJogo Varchar(30),
                descricao TEXT,
                preco double,
                localImagem TEXT
            );
            CREATE TABLE IF NOT EXISTS biblioteca
            (
                idBiblioteca int auto_increment not null primary key,
                codUsuario int,
                idJogo int,
                dataAquisicao date
            )
        ');
    }
}
