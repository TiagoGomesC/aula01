<?php require_once __DIR__ . '/../includes/header.php'; ?>
<?php require_once __DIR__ . '/../includes/function.php'; ?>
<?php require_once __DIR__ . '/../conecta.php'; ?>
<?php
$nome_usuario = isset($_SESSION['usuario_nome']) ? $_SESSION['usuario_nome'] : 'Tiago';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerencie sua mesa</title>
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin: 0;
        }

        .titulo-pagina {
            font-size: 2rem;
            margin-bottom: 10px;
            text-align: center;
        }

        /* Container principal com borda arredondada estilo imagem */
        .container-principal {
            width: 850px;
            background-color: #ffffff;
            border: 1px solid #333;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        /* Topo com Logo e Botões de Ação */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 25px;
            border-bottom: 1px solid #333;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.8rem;
            font-weight: bold;
            color: #4a154b;
            font-style: italic;
        }

        .botoes-header {
            display: flex;
            gap: 15px;
        }

        .btn-header {
            border: 1px solid #6b21a8;
            border-radius: 20px;
            padding: 6px 18px;
            color: #6b21a8;
            text-decoration: underline;
            font-size: 1.05rem;
            background: transparent;
            cursor: pointer;
        }

        /* Saudação */
        .saudacao {
            text-align: center;
            font-size: 1.1rem;
            margin: 15px 0 10px 0;
        }

        /* Layout de 3 Colunas (Menu / Imagens / Cards Direita) */
        main {
            display: grid;
            grid-template-columns: 200px 1fr 200px;
            gap: 20px;
            padding: 10px 25px 25px 25px;
            align-items: start;
        }

        /* Coluna da Esquerda (Botoes do CRUD) */
        .menu-crud {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn-crud {
            display: flex;
            align-items: center;
            border: 1px solid #333;
            border-radius: 12px;
            padding: 12px 15px;
            text-decoration: underline;
            color: #6b21a8;
            font-size: 1.1rem;
            background: transparent;
            transition: background-color 0.2s;
        }

        .btn-crud::before {
            content: "•";
            color: #6b21a8;
            font-size: 1.5rem;
            margin-right: 8px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-crud:hover {
            background-color: #fdf4ff;
        }

        /* Coluna Central (Cartazes em faixa vertical) */
        .galeria-filmes {
            display: flex;
            height: 380px;
            justify-content: center;
            overflow: hidden;
            border-radius: 4px;
        }

        .galeria-filmes img {
            width: 85px;
            height: 100%;
            object-fit: cover;
        }

        /* Coluna da Direita (Caixas com Borda) */
        .painel-direita {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card-direita {
            border: 1px solid #333;
            height: 160px;
            padding: 15px;
            box-sizing: border-box;
        }

        .card-direita .btn-crud {
            border: none;
            padding: 0;
        }

        /* Rodapé */
        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            border-top: 1px solid #333;
            font-size: 1.3rem;
            font-weight: 500;
        }
    </style>
    <h1 class="titulo-pagina">Mesa cinema</h1>

    <div class="container-principal">

        <!-- CABEÇALHO -->
        <header>
            <div>
                <img src="/imagens/Mesacinema.png" alt="Mesa cinema" class="header-logo">
            </div>
            <div class="botoes-header">
                <a href="filmes.php" class="btn-header">Ver filmes</a>
                <a href="videos.php" class="btn-header">Nossos Videos</a>
                <a href="index.php" class="btn-header">voltar</a>
            </div>
        </header>

        <!-- SAUDAÇÃO COM NOME DINÂMICO (READ DO CRUD) -->
        <div class="saudacao">
            *Seja bem-vindo de volta, <?php echo htmlspecialchars($nome_usuario); ?>!
        </div>

        <!-- CONTEÚDO PRINCIPAL (3 COLUNAS) -->
        <main>

            <!-- COLUNA ESQUERDA: MENU DO CRUD -->
            <aside class="menu-crud">
                <a href="cadastrar.php" class="btn-crud">Cadastrar filmes</a>
                <a href="atualizar.php" class="btn-crud">Atualizar informações</a>
                <a href="excluir.php" class="btn-crud">excluir filme</a>
                <a href="relatorio.php" class="btn-crud">relatorio de filmes</a>
            </aside>

            <!-- COLUNA CENTRAL: IMAGENS DOS FILMES DA IMAGEM DE REFERÊNCIA -->
            <section class="galeria-filmes">
                <img src="imagens/filme1.jpg" alt="Odisseia">
                <img src="imagens/filme2.jpg" alt="Verity">
                <img src="imagens/filme3.jpg" alt="Homem Aranha">
                <img src="imagens/filme4.jpg" alt="Obsessão">
            </section>

            <!-- COLUNA DIREITA: CAIXAS DE CONTEÚDO DA DIREITA -->
            <aside class="painel-direita">
                <div class="card-direita">
                    <a href="cadastrar.php" class="btn-crud">Cadastrar filmes</a>
                </div>
                <div class="card-direita">
                    <!-- Espaço para futuros módulos do sistema -->
                </div>
            </aside>

        </main>

        <?php include __DIR__ . '/includes/footer.php' ?>
    </div>

</body>

</html>