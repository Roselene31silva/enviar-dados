<?php
include "cabecalho.php";
$id = $_GET["id"];
include "conexao.php";
$sql = "select * from pessoas where id = $id";
$resultado = mysqli_query($conexao,$sql);
$nome = "";
$email = "";
$idade = "";
$cidade = "";
while ($linha = mysqli_fetch_array($resultado)) {
    $nome = $linha["nome"];
    $email = $linha["email"];
    $idade = $linha[""];
    $cidade = $linha[""];
}
mysqli_close($conexao);
?>
<div class="container">
    <div class="col">
        <p><strong>nome</strong><?=$nome?></p>
        <p><strong>email</strong><?=$email?></p>
        <p><strong>idade</strong><?=$idade?></p>
        <p><strong>cidade</strong><?=$cidade?></p>
    </div>
</div>
<?php include "rodape.php"; ?>
