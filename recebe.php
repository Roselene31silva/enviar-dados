!DOCTYPE html>
<html>
<head>
    <title>Página 2</title>
</head>
<body>
    <h1>Saudação</h1>
    <?php
    if (isset($_GET['nome'])) {
        echo "Olá, " . htmlspecialchars($_GET['nome']) . "!";
    } else {
        echo "Nome não informado.";
    }
    ?>
</body>
</html>