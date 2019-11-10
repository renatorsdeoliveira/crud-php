<?php include_once('config.php'); ?>
<?php include_once('listagem.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= site_url() ;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url() ;?>css/base.css">
    <title>Crud PHP</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
               <form action="registros.php" method="post" class="formulario">
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
                            <input class="form-control baixo"  type="tel" name="telefone" id="telefone" maxlength="11" placeholder="Digite seu telefone" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-submit" id="submit" >ENVIAR</button>
                    </div>
               </form>
            </div>
        </div>
    </div>

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

                                <td><?= $id;  ?></td>
                                <td><?= $nome; ?></td>
                                <td><?= $email; ?></td>
                                <td><?= $profissao; ?></td>
                                <td><?= $telefone; ?></td>
                                <td><?= $data; ?></td>
                                <td>
                                    <!-- <button type="button" class="btn btn-sm btn-primary">Visualizar</button> -->
                                    <button type="button" href="uploud.php?id='.$id.'" class="btn btn-sm btn-warning"><a href="uploud.php?id=<?=$id?>">Editar</button>
                                    <button type="button" class="btn btn-sm btn-danger">Apagar</button>
                                   
                               
                                </td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?= site_url(); ?>javascript/bootstrap.min.js"></script>
    <script src="<?= site_url(); ?>javascript/script.js"></script>
</body>
</html>