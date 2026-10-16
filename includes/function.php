<?php 
function cadastrar($conexao, $nome, $email, $senha) {
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
function cadastrarFilme($conexao, $titulo, $sinopse, $capa, $duracao) {
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
function listarFilmes($conexao) {
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
?>