<?php
include"cabecalho.php";
?>
// Na minha pagina index.php fiz o include do arquivo cabecalho.php e o rodape.php
com isso, o cabeçalho e rodapé foram incluídos automaticamente em todas as páginas
não precisei repetir o código HTML de abertura e fechamento em cada pagina que eu fiz,
pelo que eu entendi reopete no inici e final de cada pagina que eu fiz.
<div class="container">
    <h2>Registro do BD</h2>
    <?php 
    include "conexão.php";
    $sql = "select *from pessoas limit 2";
    $resultado = mysqli_query($conexao, $sql);
    while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
        <div class="col">
            <p><strong>Nome:</strong> <?php echo $linha['nome']; ?></p>
            <p><strong>Email:</strong> <?php echo $linha['email']; ?></p>
            <p><a href="detalhe.php?id=<?php echo $linha['id']; ?>">Ver detalhes</a></p>
            <p><a href="formulario.php?nome=<?php echo urlencode($linha['nome']); ?>">Preencher formulário</a></p>
        </div>
    ?>
    <?php
    }
    mysqli_close($conexao);
    ?>
</div>
<?php include "rodape.php"; ?>