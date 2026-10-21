<?php 
require_once __DIR__ . '/includes/header.php'; 
require_once __DIR__ . '/includes/function.php'; 
require_once __DIR__ . '/conecta.php'; 
//a sua função pronta passando a conexão. 
// O resultado fica guardado na variável $listaDeFilmes
$listaDeFilmes = listarFilmes($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes em Cartaz</title>
</head>
<body>

    <main>
        <h2>Filmes em Cartaz</h2>

        <!-- Botão para ir para a tela de cadastrar um novo filme -->
        <a href="cadastrar_filme.php">Cadastrar Novo Filme</a>
        <br><br>

        <!-- 3. VERIFICAÇÃO SE EXISTEM FILMES -->
        <?php if (!empty($listaDeFilmes)): ?>
            <!-- 4. LAÇO DE REPETIÇÃO (FOREACH) -->
            <!-- O foreach vai repetir este bloco HTML para CADA filme retornado do banco -->
            <?php foreach ($listaDeFilmes as $filme): ?>

                <div style="border: 1px solid #e2d1f9; padding: 15px; margin-bottom: 20px; border-radius: 8px; max-width: 300px;">
                    
                    <!-- Exibe a capa do filme usando a tag <img> -->
                    <!-- O src pega o caminho/link gravado na coluna 'capa' -->
                    <img src="<?php echo htmlspecialchars($filme['capa']); ?>" alt="Capa do filme" width="100%">

                    <!-- Exibe o título do filme -->
                    <h3><?php echo htmlspecialchars($filme['titulo']); ?></h3>

                    <!-- Exibe a duração em minutos -->
                    <p><strong>Duração:</strong> <?php echo htmlspecialchars($filme['duracao']); ?> min</p>

                    <!-- Exibe a sinopse do filme -->
                    <p><strong>Sinopse:</strong> <?php echo htmlspecialchars($filme['sinopse']); ?></p>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <!-- Mensagem exibida caso a tabela de filmes esteja vazia -->
            <p>Nenhum filme cadastrado no momento.</p>

        <?php endif; ?>

    </main>

</body>
</html>