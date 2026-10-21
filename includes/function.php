<?php
function cadastrar($conexao, $nome, $email, $senha)
{
    $sql = "INSERT INTO clientes (nome, email, senha) VALUES (:nome, :email, :senha)";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);

        $stmt->execute();
        echo "Seja bem vinda(o) ao MesaCinema!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>

<?php

// 1. CREATE - Cadastrar Filme (baseado no seu estilo PDO)
function cadastrarFilme($conexao, $titulo, $sinopse, $capa, $duracao)
{
    $sql = "INSERT INTO filmes (titulo, sinopse, capa_url, duracao) VALUES (:titulo, :sinopse, :capa, :duracao)";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":sinopse", $sinopse);
        $stmt->bindParam(":capa", $capa);
        $stmt->bindParam(":duracao", $duracao);

        $stmt->execute();
        echo "Filme cadastrado com sucesso no MesaCinema!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar filme: " . $e->getMessage();
    }
}

// 2. READ - Listar Filmes (Fase do READ do CRUD)
function listarFilmes($conexao)
{
    $sql = "SELECT id, titulo, sinopse, capa_url, duracao FROM filmes ORDER BY id DESC";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        // Retorna todos os filmes como um array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro ao buscar filmes: " . $e->getMessage();
        return [];
    }
}

// Busca o cadastro do usuário pelo ID (sem expor para ele no formulário)
function buscarUsuarioPorId($conexao, $id)
{
    $sql = "SELECT id, nome, email, senha FROM clientes WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        // O bindParam garante a segurança contra SQL Injection
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        // Retorna um array associativo com os dados do cliente
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro ao buscar usuário: " . $e->getMessage();
        return null;
    }
}
// Função para buscar todos os cadastros no banco de dados (READ)
function listarClientes($conexao, $email)
{
    $sql = "SELECT id, email, senha FROM clientes WHERE email = :email";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam("email", $email);
        $stmt->execute();

        $clientes = $stmt->fetch(PDO::FETCH_ASSOC);
        return $clientes; // para globalizar ela
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
function atualizar($conexao, $id, $nome, $email, $senha)
{
    $sql = "UPDATE clientes SET nome = :nome, email = :email, senha = :senha WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);

        $stmt->execute();
        echo "<p>Cliente atualizado com sucesso!</p>";
    } catch (PDOException $e) {
        echo "Erro ao atualizar: " . $e->getMessage();
    }
}


function verconta($conexao, $id)
{
    $sql = "SELECT id FROM clientes WHERE id = :id";
    try {
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($clientes as $clientes) {
            echo "ID: {$clientes['id']}<br>";
        }

        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        return null;
    }
}
?>