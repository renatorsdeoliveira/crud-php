<?php 
    include_once('conteudo-fixo/header.php'); 
    include_once('models/listagem.php'); 
?>

    <div class="conteudo">
        <div class="container">
            <div class="row">
           
                <div class="offset-md-3 col-md-6">
                <form action="models/registros.php" method="post" class="formulario">
                        <div class="form-group">
                            <input class="form-control lateral"  type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control lateral"  type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control baixo"  type="text" name="profissao" id="profissao" placeholder="Digite sua profissão" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control baixo"  type="tel" name="telefone" id="telefone" maxlength="15" placeholder="Digite seu telefone" required >
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-submit" id="submit">CADASTRAR</button>
                        </div>
                </form>
                </div>
            </div>
        </div>

        <?php if(mysqli_num_rows($resultado_id) != 0) { ?>
            <div class="container dados">
                <div class="row">
                    <div class="col">

                        <table class="table table-striped white text-center">
                            <thead>
                                <tr>
                                <th class="border-top-0 text-light bg-dark" scope="col">Id</th>
                                <th class="border-top-0 text-light bg-dark" scope="col">Nome</th>
                                <th class="border-top-0 text-light bg-dark" scope="col">E-mail</th>
                                <th class="border-top-0 text-light bg-dark" scope="col">Profissão</th>
                                <th class="border-top-0 text-light bg-dark" scope="col">Telefone</th>
                                <th class="border-top-0 text-light bg-dark" scope="col">Telefone</th>
                                <th class="border-top-0 text-light bg-dark" scope="col">Data</th>
                                </tr>
                            </thead>

                            <tbody>                    
                                <?php while($dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ ?>
                                    <tr>
                                        <?php 
                                            $id = $dados_usuario['id'];
                                            $nome = $dados_usuario['nome']; 
                                            $email = $dados_usuario['email'];
                                            $profissao = $dados_usuario['profissao'];
                                            $telefone = $dados_usuario['telefone'];
                                            $data  = $dados_usuario['data'];
                                        ?>

                                        <td class="align-middle"><?= $id;  ?></td>
                                        <td class="align-middle"><?= $nome; ?></td>
                                        <td class="align-middle"><?= $email; ?></td>
                                        <td class="align-middle"><?= $profissao; ?></td>
                                        <td class="align-middle"><?= $telefone; ?></td>
                                        <?php $dataFormatada = (new DateTime($data))->format('d/m/Y H:i:s');?>
                                        <td class="align-middle"><?= $dataFormatada; ?></td>
                                        <td class="align-middle">
                                            <!-- <button type="button" class="btn btn-sm btn-primary">Visualizar</button> -->
                                            <a href="editar.php?id=<?=$id?>" class="btn btn-sm btn-warning">
                                                <i class="fa fa fa-pencil  editar"  aria-hidden="true"></i>
                                            </a>
                                            <a href="models/delete.php?id=<?=$id?>"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o fa-2x excluir" aria-hidden="true"></i></i></button></a>
                                        
                                    
                                        </td>
                                    </tr>
                                <?php }; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>             
        <?php } ?>
    
    </div>
    <?php include_once('conteudo-fixo/footer.php'); ?>
  