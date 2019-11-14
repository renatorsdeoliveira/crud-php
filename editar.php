<?php 
    include_once('conteudo-fixo/header.php'); 
    // include_once('models/registro.php'); 
    include_once('models/update.php'); 

?>
    <div class="conteudo">
        <div class="container">
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <?php foreach ($resultado_id as $dados_usuario){  ?>
                            <form action="models/update.php" method="post" class="formulario">
                                <div class="form-group">
                                    <input class="form-control lateral"  type="hidden" value="<?= $dados_usuario['id'] ;?>" name="id" id="id" >
                                    <input class="form-control lateral"  type="text" value="<?= $dados_usuario['nome'] ;?>" name="nome" id="nome" placeholder="Digite seu nome" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control lateral"  type="email" value="<?= $dados_usuario['email'];?>" name="email" id="email" placeholder="Digite seu e-mail" >
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input class="form-control baixo"  type="text"  value="<?= $dados_usuario['profissao'] ;?>" name="profissao" id="profissao" placeholder="Digite sua profissão" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input class="form-control baixo"  type="tel"  value="<?= $dados_usuario['telefone'] ;?>" name="telefone" id="telefone" maxlength="11" placeholder="Digite seu telefone" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input  type="submit" class="btn btn-primary" value="SALVAR" name="btnUpdate"> 
                                    <a href="http://localhost/crud-php/" class="btn btn-primary "> CANCELAR</a>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<?php include_once('conteudo-fixo/footer.php'); ?>