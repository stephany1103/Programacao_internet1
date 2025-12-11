<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login MVC</title>
</head>
<body>


    <h1>Acesse sua conta</h1>


    <form action="../../index.php?action=login" method="POST">
        <label>E-mail:</label>
        <input type="text" name="email" placeholder="E-mail">
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <button type="submit">Entrar</button>
    </form>


</body>
</html>