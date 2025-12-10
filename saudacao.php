<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saudacao</title>
</head>
<body>
    <?php

    if(isset($_GET['nome'])) {
        $nome = htmlspecialchars($_GET['nome']);
        echo "<h1>Olá, {$nome}!</h1>";
    } else {
        echo "<h1>Nenhum nome recebido</h1>";
    }
    
    ?>

    <a href="index.php">Voltar</a>
</body>
</html>