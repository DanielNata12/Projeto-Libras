<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loguin</title>
</head>
<body>
    <header>
        <h1>Loguin</h1>
    </header>
    <form action="banco.php" method="post">
        <label for="matrícula">N° de Matrícula: </label>
        <input type="text" name="matrícula" id="idMatrícula">
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="idSenha">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>