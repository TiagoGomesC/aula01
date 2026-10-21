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
    <title>FacaLogin</title>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <main>

    <h1>Entre na mesa para continuar!</h1>
        <form action="" method="post">
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email"><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha"><br>
            <input type="submit" value="Entrar">

        </form>

     <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $clientes = listarClientes($conexao, $_POST['email']);
            if (is_array($clientes) && isset($clientes['email']) && $clientes['email'] == $_POST['email'] && $clientes['senha'] == $_POST['senha']) {
                $_SESSION['id'] = $clientes['id'];
                header("Location: ../index.php");
                exit();
            } else {
           echo "<p style='color: red;'>Cliente ou senha inválidos.</p>";
            }
        }
        ?>

    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>