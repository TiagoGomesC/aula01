<?php require_once __DIR__ . '/../includes/header.php'; ?>
<?php require_once __DIR__ . '/../includes/function.php'; ?>
<?php require_once __DIR__ . '/../conecta.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Pega o caminho da imagem do campo hidden preenchido pelo <img>
    $capa = $_POST['capa'];

    cadastrarFilme($conexao, $_POST['titulo'], $_POST['sinopse'], $capa, $_POST['duracao']);

   // Redireciona diretamente para o filmes.php
    header("Location: filmes.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastraFilmes</title>
</head>
<main>
        <h2>Cadastrar Novo Filme na mesa</h2>

     <form action="" method="post">
            <label for="titulo">Título do Filme:</label><br>
            <input type="text" name="titulo" id="titulo" required><br><br>

            <label for="sinopse">Sinopse:</label><br>
            <textarea name="sinopse" id="sinopse" rows="4" cols="40" required></textarea><br><br>

            <!-- Exibição visual da imagem com a tag <img> -->
            <label>Pré-visualização da Capa:</label><br>
            <input type="file" accept="image/*"><br><br>

            <!-- Campo oculto que envia o caminho da imagem no POST -->
            <input type="hidden" name="capa" value="/imagens/capa-padrao.jpg"><br>

            <label for="duracao">Duração (em minutos):</label><br>
            <input type="number" name="duracao" id="duracao" required><br><br>

            <input type="submit" value="Cadastrar Filme">
        </form>
    </main>
<body>

</body>

</html>