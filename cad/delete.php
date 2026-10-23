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
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <h1>Quer sair da mesa?</h1>
    <p>Ficamos muito felizes pelo seu tempo com a gente!</p>

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
        .card-deletar {
            background-color: #ffffff;
            max-width: 420px;
            margin: 40px auto;
            padding: 35px 30px;
            border-radius: 16px;
            border: 1px solid #e2d1f9;
            box-shadow: 0 10px 25px rgba(74, 46, 128, 0.12);
        }

        .card-deletar h1 {
            color: #4a2e80;
            text-align: center;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.6rem;
        }

        .card-deletar p {
            color: #6b5299;
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 0.95rem;
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

        /* Botão estilizado na paleta do site */
        .btn-deletar {
            width: 100%;
            background-color: #4a2e80;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.2s, transform 0.1s;
        }

        .btn-deletar:hover {
            background-color: #382163;
        }

        .btn-deletar:active {
            transform: scale(0.98);
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }
    </style>
    </head>

    <body>

        <main>
            <div class="card-deletar">
                <h1>Quer sair da mesa?</h1>
                <p>Ficamos muito felizes pelo seu tempo com a gente!</p>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="nome">Seu nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Insira o nome para apagar" required>
                    </div>

                    <input type="submit" value="Apagar Cliente" class="btn-deletar" onclick="return confirm('Tem certeza que deseja apagar este cliente?');">
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    apagar($conexao, $_POST['nome']);
                }
                ?>
            </div>


    </body>

</html>