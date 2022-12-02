<?php
    require_once "./conexao.php";
    $GLOBALS['sql'] = $mysql;

    function inserirCliente($nome, $email, $telefone, $cpf){
        $GLOBALS['mysql']->query("INSERT INTO eletromarc.cliente(nome, email, telefone, cpf) 
        VALUES('$nome', '$email', '$telefone', '$cpf');
        ");
    }

    function apagarCliente($idCliente){
        $GLOBALS['mysql']->query("DELETE * FROM eletromarc.cliente WHERE id = $idCliente");
    }
    
?>