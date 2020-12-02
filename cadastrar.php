
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Cadastro </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="estilo/form.css">
    <link rel="stylesheet" type="text/css" href="estilo/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
    <body>
    <?php include 'modulos/header.php'?>
    <div class="container">
        <div class="center">
            <div class="title">Cadastrar Usuário<span>*</span></div>
            <form class="needs-validation" method="POST"  action="controller/salvarusuario.php">
                <div class="form-row ">
                    <div class="col">
                        <input type="text" class="form-control" id="nome" placeholder="Nome completo" name="nome" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                </div>
            <div class="form-row ">
                <div class="col">
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" name="email" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                </div>
            <div class="form-row ">
                <div class="col">
                        <input type="password" class="form-control" id="senha" placeholder="Digite uma senha" name="senha" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                </div>
                <div class="form-row" id="bt">
                            <div class="col" id="col-bt">     
                                <input type="submit" value="Cadastrar" class="btn btn-outline-info"">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
    </body>
</html>