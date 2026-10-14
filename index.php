<?php require_once __DIR__ . '/conecta.php' ?>
<?php include 'includes/header.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar livros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <section>
        <div>
            <hr>
            <h1>
                Bem vindos ao MesaCinema!
            </h1>
            <h2>
                Aqui temos todos os livros favoritos dos integrantes do Mesa 4
            </h2>
            <?php require_once __DIR__ . '/pesquisafilme.php' ?>
            <hr>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php' ?>
</body>

</html>