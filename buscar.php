<?php
include_once "model/clsConexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title> Cadastro </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<link rel="stylesheet" type="text/css" href="estilo/form.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
	<?php include 'modulos/header.php' ?>
	<div class="container">
		<div class="center">
			<div class="title">Pesquisar Usuário<span>*</span></div>
			<form class="needs-validation" method="POST" action="">
				<div class="form-row ">
					<div class="col">
						<input type="text" name="cpf" placeholder="Digite o CPF" class="form-control" required>
						<div class="col" id="col-bt">
							<input type="submit" value="Pesquisar" class="btn btn-outline-info" name="SendPesqUser" onclick="enviaDados()">
						</div>

					</div>
				</div>
				</form>
				<?php
									
								
							$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
							if($SendPesqUser){
									$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
									$query = "SELECT * FROM clientes WHERE cpf LIKE '%$cpf%'";
									$result = Conexao::consultar($query);
									
										while($row_clientes = mysqli_fetch_assoc($result)){	
											echo '<div class="busca">Nome: '
											. $row_clientes['nome']. 
											'<a class="btn btn-warning" href= edit_usuario.php?id=' . $row_clientes['id'] .' >Editar</a>							
												</div>';
										
									}	
													
							
						}
				?>
		</div>
		<!--fecha center-->
	</div>
	<!--fecha container-->
</body>

</html>

