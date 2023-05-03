<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Biblioteca Pessoal</title>
</head>
<body>
    <div class="container">
        <h1>Biblioteca Pessoal</h1>
        <form action="valida_login.php" method="POST">
            <label for="iemail">E-mail:</label>
            <input type="email" id="iemail" name="email" required>
            <label for="isenha">Senha:</label>
            <input type="password" id="isenha" name="senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>