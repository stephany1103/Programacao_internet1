<?php
if (!isset($_SESSION)) {
    session_start();
}


if (!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado (sai fora po).   
    <br> <a href='../../index.php'>Entrar</a>");
    
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>


    <h1>E aí, boy? 👍</h1>


    <p>
        Bem-vindo ao painel, <?php echo $_SESSION['nome']; ?>
    </p>


    <a href="../../index.php?action=logout">Sair</a>


</body>
</html>