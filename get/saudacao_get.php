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
        
        $nome       = htmlspecialchars($_GET['nome']);
        $email      = htmlspecialchars($_GET['email']);
        $idade      = htmlspecialchars($_GET['idade']);
        $mensagem   = htmlspecialchars($_GET['mensagem']);

        echo "<h1>Olá, {$nome}!</h1>";

        echo "
            <table border='1'>
                <tr>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Mensagem</th>
                </tr>
                <tr>
                    <td>{$email}</td>
                    <td>{$idade}</td>
                    <td>{$mensagem}</td>
                </tr>
            </table>
        ";
    } else {
        echo "<h1>Nenhum nome recebido</h1>";
    }
    
    ?>

    <a href="index.php">Voltar</a>
</body>
</html>