<?php
session_start();
require_once __DIR__ . '/../includes/function.php';
require_once __DIR__ . '/../conecta.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    atualizar($conexao, $_POST['novonome'], $_POST['nome'], $_POST['email'], $_POST['senha']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtualizarCadastro</title>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main>
        <h1>AtualizarCadastro</h1>

        <form action="" method="post">
            
            <label for="nome">Insira seu atual Nome: </label>
            <input type="text" name="nome" id="nome" required><br>
            
            <label for="nome">Insira seu novo nome</label>
            <input type="text" name="novonome" id="novonome" required><br>

            <label for="email">Seu novo E-mail: </label>
            <input type="email" name="email" id="email" required><br>

            <label for="senha">Sua nova Senha: </label>
            <input type="password" name="senha" id="senha" required><br><br>

            <input type="submit" value="Atualizar">
            <input type="reset" value="Limpar">
        </form>
    </main>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            atualizar($conexao, $_POST['nome'], $_POST['novonome'], $_POST['email'], $_POST['senha'] );
        }
        ?>
        

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>