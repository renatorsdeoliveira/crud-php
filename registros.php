<?php

    require_once('banco.class.php');

   
        $nome =  $_POST['nome'];
  
        $email = $_POST['email'];

        $profissao = $_POST['profissao'];
    
    
       $telefone = $_POST['telefone'];
   

    // if (isset($_POST['nome'])){
    //     $nome =  $_POST['nome'];
    // }
    // if (isset($_POST['email'])){
    //     $email = $_POST['email'];
    // }
    // if (isset($_POST['profissao'])){
    //     $profissao = $_POST['profissao'];
    // }
    // if (isset($_POST['telefone'])){
    //    $telefone = $_POST['telefone'];
    // }

    $bd = new banco();
    $link = $bd->conecta_banco();

    $sql = "INSERT INTO usuario(nome, email, telefone, profissao)VALUES('$nome','$email','$telefone', '$profissao')";


    mysqli_query($link, $sql);
    print_r($sql);
    // if(){
    //     echo "Usuario registrado com sucesso";
    // }else{
    //     echo "Erro ao registrar o usuario";
    // }

?>