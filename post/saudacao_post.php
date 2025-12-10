<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saudacaoPOST</title>
</head>
<body>

    <?php
        if(isset($_POST['nome'])) {
            $nome = htmlspecialchars($_POST['nome']);
            echo "<h1>Olá, {$nome}</h1>";
        } else {
            echo "<h1>nenhum nome localizado</h1>";
        }

    ?>

    <a href="frontPost.php">Voltar</a>

</body>
</html>