<?php
session_start();
include_once "model/clsConexao.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$datanasc = filter_input(INPUT_POST, 'datanasc', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$estadocivil = filter_input(INPUT_POST, 'estadocivil', FILTER_SANITIZE_STRING);
$statusc = filter_input(INPUT_POST, 'statusc', FILTER_SANITIZE_NUMBER_INT);






$query = "UPDATE clientes SET nome='$nome', rg='$rg', cpf='$cpf', endereco='$endereco', telefone='$telefone', cep='$cep', datanasc='$datanasc', sexo='$sexo', estadocivil='$estadocivil', statusc='$statusc' WHERE id='$id'";
$result = Conexao::executar($query);


if($statusc == 1){
	echo "<script>alert('Dados alterado com sucesso');location.href=\"buscar.php\";</script>";
}else{
	echo "<script>alert('Você inativou Sua Conta.');location.href=\"buscar.php\";</script>";
	
}

?>
