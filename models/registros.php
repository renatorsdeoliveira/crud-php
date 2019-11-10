<?php

    require_once('banco.class.php');
    

    if (isset($_POST['nome'])){
        // $nome =  $_POST['nome'];
        $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if (isset($_POST['email'])){
        //$email = $_POST['email'];
        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    }
    if (isset($_POST['profissao'])){
        // $profissao = $_POST['profissao'];
        $profissao = filter_input(INPUT_POST, 'profissao', FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['telefone'])){
        // $telefone = $_POST['telefone'];
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
    }


    $bd = new banco();
    $link = $bd->conecta_banco();
    $erro =  '';


    $sql = "INSERT INTO usuarios(nome, email, telefone, profissao)VALUES('$nome','$email','$telefone', '$profissao')";
    if(mysqli_query($link, $sql)){
        header('Location: ../index.php');
        die();
    }else{
        $erro = "Erro ao registrar o usuario";
        echo $erro;
    }
    

?>