<?php
session_start();
require_once __DIR__ . '/../conecta.php';
require_once __DIR__ . '/../includes/function.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver sua conta</title>
</head>
<body>
    <?php 
    require_once __DIR__ . '/../includes/header.php';
    ?>

    <main>
        <h1>
            Veja suas informacoes aqui!
        </h1>
        <?php verconta($conexao, $_SESSION['id']); ?>
    </main>
</body>
</html>