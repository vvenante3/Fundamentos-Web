<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saudação POST</title>
</head>
<body>

    <?php
        if(isset($_POST['nome'])) {

            $nome       = htmlspecialchars($_POST['nome']);
            $email      = htmlspecialchars($_POST['email']);
            $idade      = htmlspecialchars($_POST['idade']);
            $mensagem   = htmlspecialchars($_POST['mensagem']);
            
            echo "<h1>Olá, {$nome}</h1>";

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
            echo "<h1>nenhum nome localizado</h1>";
        }

    ?>

    <a href="frontPost.php">Voltar</a>

</body>
</html>