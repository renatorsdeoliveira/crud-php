<?php

    require_once('banco.class.php');
    
    $bd = new banco();
    $link = $bd->conecta_banco();
    

    //Editar usuarios na tela
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $sql = "DELETE FROM usuarios WHERE id='$id'";
    
    $resultado_id = mysqli_query($link, $sql);

    if(mysqli_affected_rows($link)){
        header('Location: http://localhost/crud-php/');
    }else{
        echo 'não apagado';
    }
   
    
   
?>