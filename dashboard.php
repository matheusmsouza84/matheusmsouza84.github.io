<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="estilo/form.css">
    <link rel="stylesheet" type="text/css" href="estilo/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>

<body>
    <?php include 'modulos/header.php' ?>


    <div class="container">
        <div class="row row-card">
            <div class="col ">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/cad.png" alt="Casdastro de Cliente">
                    <div class="card-body">
                        <h5 class="card-title">Casdastro de Cliente</h5>
                        <hr class="my-4">
                        <p class="card-text">Faça o cadastro de um novo cliente ao sistema</p>
                        <a href="cadastrarcliente.php"> <button type="button" class=" color btn btn-primary ">Cadastrar</button></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/search-client.png" alt="Procurar Cliente">
                    <div class="card-body">
                        <h5 class="card-title">Procurar Cliente</h5>
                        <hr class="my-4">
                        <p class="card-text">Busque por pelo <b>CPF</b> para localizar o cliente</p>
                        <a href="buscar.php"><button type="button" class="color btn btn-secondary ">Buscar</button></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/exp.png" alt="Exportar Lista">
                    <div class="card-body">
                        <h5 class="card-title">Exportar Lista</h5>
                        <hr class="my-4">
                        <p class="card-text">Expostar uma lista em formato <b>csv</b> de clientes com status <b>ativo</b></p>
                        <a href="export.php"><button type="button" class="color btn btn-info ">Exportar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>