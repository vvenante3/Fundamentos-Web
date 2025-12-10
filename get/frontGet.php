<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática GET</title>
</head>
<body>

    <h3>Formulário GET</h3>

    <form action="saudacao_get.php" method="GET">
        <label>nome</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label>email:</label>
        <input type="text" name="email" id="email">
        <br>

        <label>idade</label>
        <input type="number" name="idade" id="idade">
        <br>

        <label>mensagem</label>
        <input type="text" name="mensagem" id="mensagem">
        <br><br>

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>