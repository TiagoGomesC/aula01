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
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <style>
        body {
            background-color: #f9f6ff;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Container da caixa de atualização */
        .card-atualizar {
            background-color: #ffffff;
            max-width: 420px;
            margin: 50px auto;
            padding: 35px 30px;
            border-radius: 16px;
            border: 1px solid #e2d1f9;
            box-shadow: 0 10px 25px rgba(74, 46, 128, 0.12);
        }

        .card-atualizar h1 {
            color: #4a2e80;
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
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

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
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

        /* Container para alinhar os botões lado a lado */
        .btn-group {
            display: flex;
            gap: 12px;
            margin-top: 10px;
        }

        .btn-atualizar {
            flex: 2;
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

        .btn-atualizar:hover {
            background-color: #382163;
        }

        .btn-limpar {
            flex: 1;
            background-color: #f3effe;
            color: #4a2e80;
            border: 1px solid #d8c2f5;
            padding: 12px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-limpar:hover {
            background-color: #e2d1f9;
        }

        .btn-atualizar:active,
        .btn-limpar:active {
            transform: scale(0.98);
        }
    </style>
    </head>

    <body>

        <main>
            <div class="card-atualizar">
                <h1>Atualizar Cadeira</h1>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="nome">Insira seu atual Nome:</label>
                        <input type="text" name="nome" id="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="novonome">Insira seu novo nome:</label>
                        <input type="text" name="novonome" id="novonome" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Seu novo E-mail:</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="senha">Sua nova Senha:</label>
                        <input type="password" name="senha" id="senha" required>
                    </div>

                    <div class="btn-group">
                        <input type="submit" value="Atualizar" class="btn-atualizar">
                        <input type="reset" value="Limpar" class="btn-limpar">
                    </div>
                </form>
            </div>
        </main>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            atualizar($conexao, $_POST['nome'], $_POST['novonome'], $_POST['email'], $_POST['senha']);
        }
        ?>


        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>

</html>