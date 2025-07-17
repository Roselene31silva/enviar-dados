<?php
include"cabecalho.php";
?>
<div class="container">
    <h1>Bem-vindo à Página 2</h1>
    <?php
    include "conexao.php";
    $sql = "select * from pessoas";
    $result = mysqli_query($conexao, $sql);
    while ($linha = mysqli_fetch_assoc( $resultado )) {
        ?>  
        <div class="col-3">
           <?php echo "Olá, " . $_GET['nome'];?>  
        </div>
        <?php
    }
    mysqli_close( $conexao );
    ?>
</div>
    <?php include"rodape.php"; ?>



