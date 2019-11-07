<?php include_once('config.php'); ?>
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
            <div class="offset-md-3 col-md-6 ">
               <form action="" method="post" class="formulario">
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
                            <input class="form-control baixo"  type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="arquivo">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-submit ">ENVIAR</button>
                    </div>
               </form>
            </div>
        </div>
    </div>

    <script src="<?= site_url(); ?>javascript/bootstrap.min.js"></script>
</body>
</html>