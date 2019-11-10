<?php

    require_once('banco.class.php');
    
    $bd = new banco();
    $link = $bd->conecta_banco();
    

    //Listar usuarios na tela
    $sql = "SELECT * FROM usuarios ORDER BY id DESC ";
    $resultado_id = mysqli_query($link, $sql);
    
  


?>