<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática Fundamentos</title>
</head>
<body>
    <?php 
    
    $metodo = $_SERVER['REQUEST_METHOD'];

    if($metodo === 'POST') {

        $erros = [];

        if(isset($_POST['nome'])) {
            $nome               = htmlspecialchars($_POST['nome']);
            $email              = htmlspecialchars($_POST['email']);
            $senha              = $_POST['senha'];
            $confirmar_senha  = $_POST['confirmar_senha'];  

            // validar nome
            if($nome === '') {
                $erros[] = "Nome vazio!";
            }

            // validar email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erros[] = "Email inválido!";
            }

            // validar senhas iguais
            if($senha !== $confirmar_senha) {
                $erros[] = "Senhas não idênticas!";
            }    
            
            // se houver erros
            if(!empty($erros)) {
                foreach($erros as $erro) {
                    echo "<li>$erro</li>";
                }
                exit;
            }

            echo "<h1>Olá, {$nome} </h1><br><br>";

            echo "<h4>Método utilizado: <strong>{$metodo}</strong></h4>";

        } else {
            echo "nenhum nome localizado!";
        }

    }
    
    ?>
</body>
</html>