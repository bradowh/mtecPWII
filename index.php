<?php
require "Usuario.class.php";
$usuario = new Usuario();
$con = $usuario -> conecta();

if( $con ){
    $user = $usuario -> inserirUsuario("Rafael","fael@gmail.com", 1234);

    if {echo "Usuário inserido com sucesso!";
    }else{
        echo "Erro ao inserir usuario";
    }

}else{
    echo "Banco indisponivel";
}