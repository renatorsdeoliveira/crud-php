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
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    }


    $bd = new banco();
    $link = $bd->conecta_banco();
    $erro =  '';
    $email_existe = '';

    //verificação para ver se existe emails iguais no banco
    $sql = "SELECT * FROM  usuarios WHERE email = '$email'";
    if($resultoEmail = mysqli_query($link, $sql)){
        $dados_usuario = mysqli_fetch_array($resultoEmail, MYSQLI_ASSOC);
        if($dados_usuario['email']){
            $email_existe = true;
        }
    }else{
        echo "Aconteceu um erro ao tentar localizar o E-mail";
    }

    $retorno_get_existe = ''; 
    if($email_existe){
        $retorno_get_existe .= 'email_erro=1'; 
        header('Location: ../?'.$retorno_get_existe);
    }else{
        $sql = "INSERT INTO usuarios(nome, email, telefone, profissao)VALUES('$nome','$email','$telefone', '$profissao')";
        if(mysqli_query($link, $sql)){
            header('Location: ../');
            die();
        }else{
            $erro = "Erro ao registrar o usuario";
            echo $erro;
        }
    }

  
    

?>