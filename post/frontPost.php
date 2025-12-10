<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática POST</title>
</head>
<body>

    <h3>Método POST</h3>

    <form action="saudacao_post.php" method="POST">
        <label>Nome</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label>Email</label>
        <input type="text" name="email" id="email">
        <br>

        <label>Idade</label>
        <input type="number" name="idade" id="idade">
        <br>

        <label>Mensagem</label>
        <input type="text" name="mensagem" id="mensagem">
        <br><br>
        
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>