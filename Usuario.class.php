<?php

class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function conceta(){
        $dns  = "mysql:dbname=etimusuario;host=localhost";
        $user = "root";
        $pass = "";
        
        try {

           $this -> $pdo = new PDO( $dns, $user, $pass );
           return true;

        } catch (\Throwable $th) {
            echo "Problema $th";
            return false;
        }
    }

    function inserirUsuario( $nome, $email, $senha ){
        $sql  = "INSERT INTO usuario SET nome = :n, email = :e, senha = :s";
        $stmt = $this -> pdo -> prepare( $sql );
        $stmt -> bindValue(":n", $nome );
        $stmt -> bindValue(":e", $email );
        $stmt -> bindValue(":s", $senha );

        return $stmt -> execute();

    }
}