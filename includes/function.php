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