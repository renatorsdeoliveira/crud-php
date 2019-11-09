<?php 

    class banco{

        private $host = "localhost";
        private $usuario = "root";
        private $senha = "";
        private $banco = "crud";

        public function conecta_banco(){
            $conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);

            mysqli_set_charset($conexao, "UTF8");

            if(mysqli_connect_errno()){
                echo "erro".mysqli_connect_error();
            }
      
            return $conexao;
           
        }
        

    }

?>