<?php 
    session_start();
    
    if( isset($_REQUEST['erro']) ){
    echo '<div class="alert alert-danger" role="alert">
    E-mail ou senha Incorreto
    </div>';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Estilo/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="row">              
                <div class="col-12 col-md-8 color-left"></div>
                    <div class="col-6 col-md-4  login">  
                        <h4 class="acesso"><b>Acessar sistema Hotel</b></h4>
                        <form method="POST" id="formlogin" action="controller/login.php" >
                            <input type="email" placeholder="E-mail" name="email" required> 
                            <input type="password" placeholder="Senha" name="senha" required> 
                            <input class="btn btn-success" type="submit" value="Login"> 
                            <a href="cadastrar.php" class="cad"><strong> Cadastre-se aqui! </strong></a>
                        </form> 
                </div>
              </div>
          </div>
        </div>
    </body>
</html>
