<?php
//conexão com localhost do xampp phpmyadmin, quando eu chamo no link da pagina
//ele encontra no meu banco de dados
$servidor = "localhost";
$bd = "enviar-dados";
$usuario = "root";
$senha = "";


$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>