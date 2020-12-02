<?php
session_start();
include_once "model/clsConexao.php";
    $str = 'Nome;';
    $str .= 'CPF;';
    $str .= 'CEP;';
    $str .= 'Telefone'.PHP_EOL;
    $query = "SELECT nome, cpf, cep, telefone FROM clientes WHERE statusc = 1";
    $result = Conexao::consultar($query);
    
    while ($row_cliente = mysqli_fetch_assoc($result)){
        
        $str .= implode(';', $row_cliente) .''. PHP_EOL;
    }
    file_put_contents('dados.csv', $str);
    setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
    date_default_timezone_set( 'America/Sao_Paulo' );
    $data =  strftime( '%d-%m-%Y(%H.%M.%S)', strtotime('now') ); 
    header("Content-Disposition: attachment; filename=dados-".$data.".csv");
    header("Pragma: no-cache");
    header("Expires: 0");
    
    
echo $str;


?>
