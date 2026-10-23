<?php
require_once __DIR__ . '/../includes/function.php';
require_once __DIR__ . '/../conecta.php';
$clienteEncontrado = null;
$buscaRealizada = false;

if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['nome_busca'])) {
    $clienteEncontrado = buscarCliente($conexao, $_POST['nome_busca']);
    $buscaRealizada = true;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Minha mesa</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <style>
        body {
            background-color: #f9f6ff;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Redimensionamento fixo da logo no cabeçalho */
        .header-logo,
        img[alt="Mesa cinema"] {
            max-width: 180px !important;
            height: auto !important;
            display: block;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }

        /* Container da caixa flutuante */
        .card-relatorio {
            background-color: #ffffff;
            max-width: 500px;
            margin: 40px auto;
            padding: 35px 30px;
            border-radius: 16px;
            border: 1px solid #e2d1f9;
            box-shadow: 0 10px 25px rgba(74, 46, 128, 0.12);
        }

        .card-relatorio h1 {
            color: #4a2e80;
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 1.6rem;
        }

        .form-group {
            margin-bottom: 18px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            color: #4a2e80;
            font-weight: bold;
            margin-bottom: 6px;
            font-size: 0.95rem;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d8c2f5;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            box-sizing: border-box;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-group input:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2);
        }

        .btn-buscar {
            width: 100%;
            background-color: #4a2e80;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.1s;
        }

        .btn-buscar:hover {
            background-color: #382163;
        }

        .btn-buscar:active {
            transform: scale(0.98);
        }

        /* Estilização da tabela de exibição */
        .tabela-relatorio {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        .tabela-relatorio th,
        .tabela-relatorio td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e2d1f9;
        }

        .tabela-relatorio th {
            background-color: #f0e6ff;
            color: #4a2e80;
            font-weight: bold;
        }

        .tabela-relatorio td {
            color: #333;
        }

        .msg-alerta {
            text-align: center;
            color: #8b5cf6;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
    </head>

    <body>

        <?php include __DIR__ . '/../includes/header.php'; ?>

        <main>
            <div class="card-relatorio">
                <h1>Relatório do Cliente</h1>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="nome_busca">Digite o nome para consultar:</label>
                        <input type="text" name="nome_busca" id="nome_busca" placeholder="Ex: Tiago" required>
                    </div>

                    <input type="submit" value="Consultar Cadastro" class="btn-buscar">
                </form>

                <?php if ($buscaRealizada): ?>
                    <?php if (!empty($clienteEncontrado)): ?>
                        <table class="tabela-relatorio">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($clienteEncontrado as $cliente): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($cliente['nome']); ?></td>
                                        <td><?php echo htmlspecialchars($cliente['email']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <p class="msg-alerta">Nenhum cliente encontrado com esse nome.</p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </main>
    </body>

</html>