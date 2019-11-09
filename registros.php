<?php

    require_once('banco.class.php');
    

    if (isset($_POST['nome'])){
        $nome =  $_POST['nome'];
    }
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if (isset($_POST['profissao'])){
        $profissao = $_POST['profissao'];
    }
    if (isset($_POST['telefone'])){
       $telefone = $_POST['telefone'];
    }


    $bd = new banco();
    $link = $bd->conecta_banco();
    $erro =  '';


    $sql = "INSERT INTO usuaris(nome, email, telefone, profissao)VALUES('$nome','$email','$telefone', '$profissao')";
    if(mysqli_query($link, $sql)){
        $erro = "Usuario registrado com sucesso";
        echo $erro;
    }else{
        $erro = "Erro ao registrar o usuario";
        echo $erro;
    }
    

?>