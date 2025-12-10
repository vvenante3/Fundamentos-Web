<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saudacao</title>
</head>
<body>
    <?php

    $metodo = $_SERVER['REQUEST_METHOD'];

    if($metodo === 'GET') {

        if(isset($_GET['nome'])) {
            
            $nome       = htmlspecialchars($_GET['nome']);
            $email      = htmlspecialchars($_GET['email']);
            $idade      = htmlspecialchars($_GET['idade']);
            $mensagem   = htmlspecialchars($_GET['mensagem']);

            // validar nome
            if($nome === '') {
                $erros[] = "nome vazio";
            }

            // validar email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erros[] = "email inválido";
            }

            // validar idade
            if($idade < 18) {
                $erros[] = "menor de idade";
            }

            // validar mensagem
            if(strlen($mensagem) < 5) {
                $erros[] = "mensagem curta";
            }

            // exibe os erros
            if(!empty($erros)) {
                foreach ($erros as $erro) {
                    echo "<li>$erro</li>";
                }
            }

    
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
                <p>
            ";
        } else {
            echo "<h1>Nenhum nome recebido</h1>";
        }

        echo "Método utilizado: <strong>{$metodo}</strong><p>";

    }

    
    ?>

    <a href="index.php">Voltar</a>
</body>
</html>