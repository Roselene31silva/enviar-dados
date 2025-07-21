<?php
$servidor = "localhost";
$bd = "enviar-dados";
$usuario = "root";
$senha = "";


$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>