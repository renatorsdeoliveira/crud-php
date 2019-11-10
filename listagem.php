<?php

    require_once('banco.class.php');
    
    $bd = new banco();
    $link = $bd->conecta_banco();
    

    //Listar usuarios na tela
    $sql = "SELECT * FROM usuarios";
    $resultado_id = mysqli_query($link, $sql);
    
  


?>