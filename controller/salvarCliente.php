<?php
    include_once "../model/clsConexao.php";

    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $datanasc = $_POST['datanasc'];
    $sexo = $_POST['sexo'];
    $estadocivil = $_POST['estadocivil'];

    $query = "INSERT INTO clientes (nome, rg, cpf, endereco, telefone, cep, datanasc, sexo, estadocivil) VALUES ('$nome', '$rg', '$cpf', '$endereco', '$telefone', '$cep', '$datanasc', '$sexo', '$estadocivil')";
    $result = Conexao::executar($query);


    header("Location: ../dashboard.php");
?>