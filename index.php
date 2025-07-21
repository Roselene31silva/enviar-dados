<?php
include"cabecalho.php";
?>
<div class="container">
    <h2>Registro do BD</h2>
    <?php 
    include "conexão.php";
    $sql = "select *from pessoas limit 2";
    $resultado = mysqli_query($conexao, $sql);
    while ($linha = mysqli_fetch_assoc($resultado)) {
    ?>
    <?php
    }
    mysqli_close($conexao);
    ?>
</div>
<?php include "rodape.php"; ?>