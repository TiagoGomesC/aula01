<?php require_once __DIR__ . '/../includes/header.php'; ?>
<?php require_once __DIR__ . '/../includes/function.php'; ?>
<?php require_once __DIR__ .'/../conecta.php'; ?>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    cadastrar($conexao, $_POST['nome'], $_POST['email'], $_POST['senha']);

    header("Location: /../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeCadastre</title>
    <link rel="stylesheet" href="/novomesacinema/style.css">
</head>

<body>
    <style>
        /* Centraliza a caixa na tela e define o fundo geral */
        body {
            background-color: #f9f6ff; /* Fundo bem suave */
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Container da caixa flutuante */
        .card-cadastro {
            background-color: #ffffff;
            max-width: 400px;
            margin: 50px auto;
            padding: 35px 30px;
            border-radius: 16px;
            
            /* Borda sutil na paleta roxa */
            border: 1px solid #e2d1f9;
            
            /* Sombra que dá a sensação de estar "fora/flutuando" da página */
            box-shadow: 0 10px 25px rgba(74, 46, 128, 0.12);
        }

        .card-cadastro h2 {
            color: #4a2e80;
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 1.5rem;
        }

        /* Estilização dos grupos de formulário */
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

        /* Efeito ao clicar no campo de digitação */
        .form-group input:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2);
        }

        /* Botão de envio */
        .btn-cadastrar {
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

        .btn-cadastrar:hover {
            background-color: #382163;
        }

        .btn-cadastrar:active {
            transform: scale(0.98);
        }
    </style>
    <main>
        <h2>
            Cadastre-se na nossa mesa!
        </h2>
        <form action="" method="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"><br>
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email"><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha"><br>
            <input type="submit" value="Cadastrar ">
            
    </main>

</body>

</html>