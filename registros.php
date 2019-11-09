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

    $sql = "INSERT INTO usuarios(nome, email, telefone, profissao)VALUES('$nome','$email','$telefone', '$profissao')";


    if(mysqli_query($link, $sql)){
        echo "Usuario registrado com sucesso";
    }else{
        echo "Erro ao registrar o usuario";
    }

?>