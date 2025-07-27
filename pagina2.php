<?php
include "cabecalho.php";
?>
//aqui fiz e não entendi e não deu certo.
    <h1>Saudação</h1>
    <?php
    if (isset($_GET['nome'])) {
        echo "Olá, " . htmlspecialchars($_GET['nome']) . "!";
    } else {
        echo "Nome não informado.";
    }
    ?>
<?php include "rodape.php"; ?>




