<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar os livros</title>
</head>
<body>
    <h1>
        Pesquise!
    </h1>
     <section>
        <!-- BARRA DE PESQUISA ADICIONADA AQUI -->
        <div class="search-container">
            <form action="busca.php" method="GET">
                <input type="text" name="query" placeholder="Pesquise por filmes..." required>
                <button type="submit">Pesquise</button>
            </form>
        </div>
    </section>
</body>
</html>