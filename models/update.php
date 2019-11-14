<?php

    require_once('banco.class.php');
    
    $bd = new banco();
    $link = $bd->conecta_banco();
    

    //Editar usuarios na tela
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT * FROM usuarios WHERE id='$id'";
    
    $resultado_id = mysqli_query($link, $sql);
   
  
    if(!empty($_POST['btnUpdate'])){

        $idUpdate = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $profissao = $_POST['profissao'];

        $sql = "UPDATE usuarios SET nome='$nome', email='$email',  profissao='$profissao', telefone='$telefone' WHERE id='$idUpdate' ";
        mysqli_query($link, $sql);
        
        header('Location: http://localhost/crud-php/');
      
    }
?>