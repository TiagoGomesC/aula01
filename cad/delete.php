<?php
session_start();
require_once __DIR__ . '/../includes/function.php';
require_once __DIR__ . '/../conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar cliente</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <h1>Quer sair da mesa?</h1>
    <p>Ficamos muito felizes pelo seu tempo com a gente!</p>

    <main>
        <form action="" method="post">
            <label for="nome">Seu nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Insira o nome para apagar" required><br><br>

            <input type="submit" value="Apagar Cliente" onclick="return confirm('Tem certeza que deseja apagar este cliente?');">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            apagar($conexao, $_POST['nome']);
        }
        ?>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>