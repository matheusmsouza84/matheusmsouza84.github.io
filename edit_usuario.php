<?php
session_start();
include_once "model/clsConexao.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "SELECT * FROM clientes WHERE id = '$id'";
$result = Conexao::consultar($query);
$row_clientes = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title> Editar </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="estilo/form.css">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
	<?php include 'modulos/header.php' ?>
	<div class="container">
		<div class="center">
			<div class="title">Editar Cliente<span>*</span></div>
			<form class="needs-validation" method="POST" action="proc_edit_usuario.php">
				<div class="form-row ">
					<div class="col">
						<input type="hidden" name="id" value="<?php echo $row_clientes['id']; ?>">
						<input type="text" name="nome" class="form-control" value="<?php echo $row_clientes['nome']; ?>" required>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row ">
					<div class="col">
						<input type="text" class="form-control" id="rg" placeholder="RG" value="<?php echo $row_clientes['rg']; ?>" name="rg" required>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<input type="text" class="form-control" id="cpf" placeholder="CPF" value="<?php echo $row_clientes['cpf']; ?>" name="cpf" required>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<input type="text" class="form-control" id="cep" placeholder="CEP" value="<?php echo $row_clientes['cep']; ?>" name="cep" required>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<input type="text" class="form-control" id="endereco" placeholder="Endereço" value="<?php echo $row_clientes['endereco']; ?>" name="endereco" required>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<input type="text" class="form-control" id="telefone" placeholder="Telefone" value="<?php echo $row_clientes['telefone']; ?>" name="telefone" required>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<input type="text" class="form-control" id="datanasc" placeholder="Data de nascimento" value="<?php echo $row_clientes['datanasc']; ?>" name="datanasc" required>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<select class="custom-select custom-select-sm" name="sexo" id="sexoid"required>
							<option selected disabled value="">Sexo</option>
							<option value="Masculino"> Masculino </option>
							<option value="Feminino"> Feminino </option>
						</select>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<select class="custom-select custom-select-sm" name="estadocivil" id="estid"required>
							<option selected disabled value="">Estado Civil</option>
							<option value="Casado"> Casado(a) </option>
							<option value="Solteiro"> Solteiro(a) </option>
							<option value="Viuvo"> Viúvo(a) </option>
						</select>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col">
						<select class="custom-select custom-select-sm" name="statusc" id="stat">
							<option value="1"> Conta Ativa </option>
							<option value="0"> Inativar conta </option>
						</select>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
				<div class="form-row" id="bt">
					<div class="col" id="col-bt">

						<input type="submit" value="Salvar" class="btn btn-outline-info" onclick="enviaDados()">
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

    <script src="./JS/validationForm.js"></script>
</body>

</html>
